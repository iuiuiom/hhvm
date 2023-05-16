// Copyright (c) Facebook, Inc. and its affiliates.
//
// This source code is licensed under the MIT license found in the
// LICENSE file in the "hack" directory of this source tree.
use env::emitter::Emitter;
use error::Result;
use hhbc::ClassName;
use hhbc::Span;
use hhbc::TypeInfo;
use hhbc::Typedef;
use hhvm_types_ffi::ffi::Attr;
use hhvm_types_ffi::ffi::TypeConstraintFlags;
use oxidized::aast_defs::Hint;
use oxidized::ast;

use crate::emit_attribute;
use crate::emit_body;
use crate::emit_type_constant;

pub fn emit_typedefs_from_program<'a, 'arena, 'decl>(
    e: &mut Emitter<'arena, 'decl>,
    prog: &'a [ast::Def],
) -> Result<Vec<Typedef<'arena>>> {
    prog.iter()
        .filter_map(|def| {
            def.as_typedef().and_then(|td| {
                if !td.is_ctx {
                    Some(emit_typedef(e, td))
                } else {
                    None
                }
            })
        })
        .collect()
}

fn emit_typedef<'a, 'arena, 'decl>(
    emitter: &mut Emitter<'arena, 'decl>,
    typedef: &'a ast::Typedef,
) -> Result<Typedef<'arena>> {
    let name = ClassName::<'arena>::from_ast_name_and_mangle(emitter.alloc, &typedef.name.1);
    let attributes_res = emit_attribute::from_asts(emitter, &typedef.user_attributes);
    let tparams = emit_body::get_tp_names(typedef.tparams.as_slice());
    let type_info_res = kind_to_type_info(
        emitter.alloc,
        &tparams,
        &typedef.kind,
        typedef.vis.is_case_type(),
    );
    let type_structure_res = emit_type_constant::typedef_to_type_structure(
        emitter.alloc,
        emitter.options(),
        &tparams,
        typedef,
    );

    let span = Span::from_pos(&typedef.span);
    let mut attrs = Attr::AttrNone;
    attrs.set(Attr::AttrPersistent, emitter.systemlib());

    attributes_res.and_then(|attributes| {
        type_info_res.and_then(|type_info| {
            type_structure_res.map(|type_structure| Typedef {
                name,
                attributes: emitter
                    .alloc
                    .alloc_slice_fill_iter(attributes.into_iter())
                    .into(),
                type_info,
                type_structure,
                span,
                attrs,
            })
        })
    })
}

fn kind_to_type_info<'arena>(
    alloc: &'arena bumpalo::Bump,
    tparams: &[&str],
    h: &Hint,
    is_case_type: bool,
) -> Result<TypeInfo<'arena>> {
    use emit_type_hint::Kind;
    let mut type_info = emit_type_hint::hint_to_type_info(
        alloc,
        &Kind::TypeDef,
        false,
        h.1.is_hoption(),
        tparams,
        h,
    )?;
    if is_case_type {
        type_info.type_constraint.flags =
            type_info.type_constraint.flags | TypeConstraintFlags::CaseType;
    }
    Ok(type_info)
}
