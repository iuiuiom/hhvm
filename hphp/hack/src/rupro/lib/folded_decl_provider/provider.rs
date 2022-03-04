// Copyright (c) Facebook, Inc. and its affiliates.
//
// This source code is licensed under the MIT license found in the
// LICENSE file in the "hack" directory of this source tree.

use super::{fold::DeclFolder, Error, FoldedDeclProvider, Result, TypeDecl};
use crate::cache::{Cache, NonEvictingCache};
use crate::decl_defs::{ConstDecl, DeclTy, DeclTy_, FoldedClass, FunDecl, ShallowClass};
use crate::decl_parser::DeclParser;
use crate::naming_provider::SqliteNamingTable;
use crate::reason::Reason;
use crate::shallow_decl_provider::{
    self, EagerShallowDeclProvider, LazyShallowDeclProvider, ShallowDeclCache, ShallowDeclProvider,
};
use crate::special_names::SpecialNames;
use pos::{
    ConstName, FunName, MethodName, Positioned, PropName, RelativePath, TypeName, TypeNameMap,
    TypeNameSet,
};
use std::path::PathBuf;
use std::sync::Arc;

// note(sf, 2022-02-03): c.f. hphp/hack/src/decl/decl_folded_class.ml

/// A `FoldedDeclProvider` which, if the requested class name is not present in
/// its cache, recursively computes the folded decl for that class by requesting
/// the shallow decls of that class and its ancestors from its
/// `ShallowDeclProvider`.
#[derive(Debug)]
pub struct LazyFoldedDeclProvider<R: Reason> {
    cache: Arc<dyn Cache<TypeName, Arc<FoldedClass<R>>>>,
    special_names: &'static SpecialNames,
    shallow_decl_provider: Arc<dyn ShallowDeclProvider<R>>,
}

impl<R: Reason> LazyFoldedDeclProvider<R> {
    pub fn new(
        cache: Arc<dyn Cache<TypeName, Arc<FoldedClass<R>>>>,
        special_names: &'static SpecialNames,
        shallow_decl_provider: Arc<dyn ShallowDeclProvider<R>>,
    ) -> Self {
        Self {
            cache,
            special_names,
            shallow_decl_provider,
        }
    }
}

impl<R: Reason> super::FoldedDeclProvider<R> for LazyFoldedDeclProvider<R> {
    fn get_fun(&self, name: FunName) -> Result<Option<Arc<FunDecl<R>>>> {
        Ok(self.shallow_decl_provider.get_fun(name)?)
    }

    fn get_const(&self, name: ConstName) -> Result<Option<Arc<ConstDecl<R>>>> {
        Ok(self.shallow_decl_provider.get_const(name)?)
    }

    fn get_type(&self, name: TypeName) -> Result<Option<TypeDecl<R>>> {
        match self.shallow_decl_provider.get_type(name)? {
            None => Ok(None),
            Some(shallow_decl_provider::TypeDecl::Typedef(decl)) => {
                Ok(Some(TypeDecl::Typedef(decl)))
            }
            Some(shallow_decl_provider::TypeDecl::Class(..)) => {
                let mut stack = Default::default();
                Ok(self
                    .get_folded_class_impl(&mut stack, name)?
                    .map(TypeDecl::Class))
            }
        }
    }

    fn get_shallow_property_type(
        &self,
        class_name: TypeName,
        property_name: PropName,
    ) -> Result<Option<DeclTy<R>>> {
        Ok(self
            .shallow_decl_provider
            .get_property_type(class_name, property_name)?)
    }

    fn get_shallow_static_property_type(
        &self,
        class_name: TypeName,
        property_name: PropName,
    ) -> Result<Option<DeclTy<R>>> {
        Ok(self
            .shallow_decl_provider
            .get_static_property_type(class_name, property_name)?)
    }

    fn get_shallow_method_type(
        &self,
        class_name: TypeName,
        method_name: MethodName,
    ) -> Result<Option<DeclTy<R>>> {
        Ok(self
            .shallow_decl_provider
            .get_method_type(class_name, method_name)?)
    }

    fn get_shallow_static_method_type(
        &self,
        class_name: TypeName,
        method_name: MethodName,
    ) -> Result<Option<DeclTy<R>>> {
        Ok(self
            .shallow_decl_provider
            .get_static_method_type(class_name, method_name)?)
    }

    fn get_shallow_constructor_type(&self, class_name: TypeName) -> Result<Option<DeclTy<R>>> {
        Ok(self
            .shallow_decl_provider
            .get_constructor_type(class_name)?)
    }
}

impl<R: Reason> LazyFoldedDeclProvider<R> {
    fn detect_cycle(&self, stack: &mut TypeNameSet, pos_id: &Positioned<TypeName, R::Pos>) -> bool {
        if stack.contains(&pos_id.id()) {
            todo!("TODO(hrust): register error");
        }
        false
    }

    fn decl_class_type(
        &self,
        stack: &mut TypeNameSet,
        acc: &mut TypeNameMap<Arc<FoldedClass<R>>>,
        ty: &DeclTy<R>,
    ) -> Result<()> {
        match &**ty.node() {
            DeclTy_::DTapply(id_and_args) => {
                let pos_id = &id_and_args.0;
                if !self.detect_cycle(stack, pos_id) {
                    if let Some(folded_decl) = self.get_folded_class_impl(stack, pos_id.id())? {
                        acc.insert(pos_id.id(), folded_decl);
                    }
                }
            }
            _ => {}
        }
        Ok(())
    }

    fn parent_error(sc: &ShallowClass<R>, parent: &DeclTy<R>, err: Error) -> Error {
        // We tried to produce a decl of the parent of the given class but
        // failed. We capture this chain of events as a `Parent` error. The has
        // the effect of explaining that "we couldn't decl 'class' because we
        // couldn't decl 'parent' because ... x" ( where 'x' is the underlying
        // error like, the parent's php file is missing).
        match parent.unwrap_class_type() {
            Some((_, parent_name, _)) => match err {
                Error::Parent {
                    class: _,
                    mut parents,
                    error,
                } => {
                    parents.push(parent_name.id());
                    Error::Parent {
                        class: sc.name.id(),
                        parents,
                        error,
                    }
                }
                _ => Error::Parent {
                    class: sc.name.id(),
                    parents: vec![parent_name.id()],
                    error: Box::new(err),
                },
            },
            None => err,
        }
    }

    // note(sf, 2022-03-02): c.f. Decl_folded_class.class_parents_decl
    fn decl_class_parents(
        &self,
        stack: &mut TypeNameSet,
        sc: &ShallowClass<R>,
    ) -> Result<TypeNameMap<Arc<FoldedClass<R>>>> {
        let mut acc = Default::default();
        for ty in sc.extends.iter() {
            self.decl_class_type(stack, &mut acc, ty)
                .map_err(|err| Self::parent_error(sc, ty, err))?;
        }
        for ty in sc.implements.iter() {
            self.decl_class_type(stack, &mut acc, ty)
                .map_err(|err| Self::parent_error(sc, ty, err))?;
        }
        for ty in sc.uses.iter() {
            self.decl_class_type(stack, &mut acc, ty)
                .map_err(|err| Self::parent_error(sc, ty, err))?;
        }
        for ty in sc.xhp_attr_uses.iter() {
            self.decl_class_type(stack, &mut acc, ty)
                .map_err(|err| Self::parent_error(sc, ty, err))?;
        }
        for ty in sc.req_extends.iter() {
            self.decl_class_type(stack, &mut acc, ty)
                .map_err(|err| Self::parent_error(sc, ty, err))?;
        }
        for ty in sc.req_implements.iter() {
            self.decl_class_type(stack, &mut acc, ty)
                .map_err(|err| Self::parent_error(sc, ty, err))?;
        }
        //TODO: enum_includes
        Ok(acc)
    }

    fn decl_class(
        &self,
        stack: &mut TypeNameSet,
        name: TypeName,
    ) -> Result<Option<Arc<FoldedClass<R>>>> {
        let shallow_class = match self.shallow_decl_provider.get_class(name)? {
            None => return Ok(None),
            Some(c) => c,
        };
        stack.insert(name);
        let parents = self.decl_class_parents(stack, &shallow_class)?;
        let folder = DeclFolder::new(self.special_names);
        Ok(Some(folder.decl_class(&shallow_class, &parents)))
    }

    fn get_folded_class_impl(
        &self,
        stack: &mut TypeNameSet,
        name: TypeName,
    ) -> Result<Option<Arc<FoldedClass<R>>>> {
        match self.cache.get(name) {
            Some(rc) => Ok(Some(rc)),
            None => match self.decl_class(stack, name)? {
                None => Ok(None),
                Some(rc) => {
                    self.cache.insert(name, Arc::clone(&rc));
                    Ok(Some(rc))
                }
            },
        }
    }
}

fn make_shallow_decl_provider<R: Reason>(
    naming_table_path_opt: Option<&PathBuf>,
    decl_parser: &DeclParser,
    filenames: &[RelativePath],
) -> Arc<dyn ShallowDeclProvider<R>> {
    let cache = Arc::new(ShallowDeclCache::with_no_eviction());
    for &path in filenames {
        let decls = decl_parser.parse(path).unwrap();
        cache.add_decls(decls);
    }
    if let Some(naming_table_path) = naming_table_path_opt {
        Arc::new(LazyShallowDeclProvider::new(
            cache,
            Arc::new(SqliteNamingTable::new(naming_table_path).unwrap()),
            decl_parser.clone(),
        ))
    } else {
        Arc::new(EagerShallowDeclProvider::new(cache))
    }
}

pub fn make_folded_decl_provider<R: Reason>(
    naming_table_path_opt: Option<&PathBuf>,
    decl_parser: &DeclParser,
    filenames: &[RelativePath],
) -> Arc<dyn FoldedDeclProvider<R>> {
    let shallow_decl_provider =
        make_shallow_decl_provider(naming_table_path_opt, decl_parser, filenames);
    Arc::new(LazyFoldedDeclProvider::new(
        Arc::new(NonEvictingCache::new()),
        SpecialNames::new(),
        shallow_decl_provider,
    ))
}
