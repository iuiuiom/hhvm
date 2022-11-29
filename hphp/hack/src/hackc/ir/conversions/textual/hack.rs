// Copyright (c) Facebook, Inc. and its affiliates.
//
// This source code is licensed under the MIT license found in the
// LICENSE file in the "hack" directory of this source tree.

use anyhow::Error;
use textual_macros::TextualDecl;

use crate::textual;
use crate::textual::Sid;
use crate::textual::TextualFile;

type Result<T = (), E = Error> = std::result::Result<T, E>;

/// These represent builtins for handling HHVM bytecode instructions. In general
/// the names should match the HHBC name except when they are compound bytecodes
/// (like Cmp with a parameter of Eq becoming CmpEq). Documentation can be found
/// in hphp/doc/bytecode.specification.
#[derive(Copy, Clone, TextualDecl)]
pub(crate) enum Hhbc {
    #[decl(fn hhbc_add(*HackMixed, *HackMixed) -> *HackMixed)]
    Add,
    #[decl(fn hhbc_cast_vec(*HackMixed) -> void)]
    CastVec,
    #[decl(fn hhbc_class_get_c(*HackMixed) -> void)]
    CheckClsRGSoft,
    #[decl(fn hhbc_check_this(*HackMixed) -> void)]
    CheckThis,
    #[decl(fn hhbc_class_get_c(*HackMixed) -> *HackMixed)]
    ClassGetC,
    #[decl(fn hhbc_class_has_reified_generics(*HackMixed) -> *HackMixed)]
    ClassHasReifiedGenerics,
    #[decl(fn hhbc_cmp_eq(*HackMixed, *HackMixed) -> *HackMixed)]
    CmpEq,
    #[decl(fn hhbc_cmp_gt(*HackMixed, *HackMixed) -> *HackMixed)]
    CmpGt,
    #[decl(fn hhbc_cmp_gte(*HackMixed, *HackMixed) -> *HackMixed)]
    CmpGte,
    #[decl(fn hhbc_cmp_lt(*HackMixed, *HackMixed) -> *HackMixed)]
    CmpLt,
    #[decl(fn hhbc_cmp_lte(*HackMixed, *HackMixed) -> *HackMixed)]
    CmpLte,
    #[decl(fn hhbc_cmp_nsame(*HackMixed, *HackMixed) -> *HackMixed)]
    CmpNSame,
    #[decl(fn hhbc_cmp_neq(*HackMixed, *HackMixed) -> *HackMixed)]
    CmpNeq,
    #[decl(fn hhbc_cmp_same(*HackMixed, *HackMixed) -> *HackMixed)]
    CmpSame,
    #[decl(fn hhbc_concat(*HackMixed, *HackMixed) -> *HackMixed)]
    Concat,
    #[decl(fn hhbc_div(*HackMixed, *HackMixed) -> *HackMixed)]
    Div,
    #[decl(fn hhbc_exit(*HackMixed) -> noreturn)]
    Exit,
    #[decl(fn hhbc_get_cls_rg_prop(*HackMixed) -> *HackMixed)]
    GetClsRGProp,
    #[decl(fn hhbc_has_reified_parent(*HackMixed) -> *HackMixed)]
    HasReifiedParent,
    #[decl(fn hhbc_is_type_arr_like(*HackMixed) -> *HackMixed)]
    IsTypeArrLike,
    #[decl(fn hhbc_is_type_bool(*HackMixed) -> *HackMixed)]
    IsTypeBool,
    #[decl(fn hhbc_is_type_class(*HackMixed) -> *HackMixed)]
    IsTypeClass,
    #[decl(fn hhbc_is_type_cls_meth(*HackMixed) -> *HackMixed)]
    IsTypeClsMeth,
    #[decl(fn hhbc_is_type_dbl(*HackMixed) -> *HackMixed)]
    IsTypeDbl,
    #[decl(fn hhbc_is_type_dict(*HackMixed) -> *HackMixed)]
    IsTypeDict,
    #[decl(fn hhbc_is_type_func(*HackMixed) -> *HackMixed)]
    IsTypeFunc,
    #[decl(fn hhbc_is_type_int(*HackMixed) -> *HackMixed)]
    IsTypeInt,
    #[decl(fn hhbc_is_type_keyset(*HackMixed) -> *HackMixed)]
    IsTypeKeyset,
    #[decl(fn hhbc_is_type_legacy_arr_like(*HackMixed) -> *HackMixed)]
    IsTypeLegacyArrLike,
    #[decl(fn hhbc_is_type_null(*HackMixed) -> *HackMixed)]
    IsTypeNull,
    #[decl(fn hhbc_is_type_obj(*HackMixed) -> *HackMixed)]
    IsTypeObj,
    #[decl(fn hhbc_is_type_res(*HackMixed) -> *HackMixed)]
    IsTypeRes,
    #[decl(fn hhbc_is_type_scalar(*HackMixed) -> *HackMixed)]
    IsTypeScalar,
    #[decl(fn hhbc_is_type_str(*HackMixed) -> *HackMixed)]
    IsTypeStr,
    #[decl(fn hhbc_is_type_vec(*HackMixed) -> *HackMixed)]
    IsTypeVec,
    #[decl(fn hhbc_lock_obj(*HackMixed) -> void)]
    LockObj,
    #[decl(fn hhbc_modulo(*HackMixed, *HackMixed) -> *HackMixed)]
    Modulo,
    #[decl(fn hhbc_mul(*HackMixed, *HackMixed) -> *HackMixed)]
    Mul,
    #[decl(fn hhbc_new_col_imm_map() -> *HackMixed)]
    NewColImmMap,
    #[decl(fn hhbc_new_col_imm_set() -> *HackMixed)]
    NewColImmSet,
    #[decl(fn hhbc_new_col_imm_vector() -> *HackMixed)]
    NewColImmVector,
    #[decl(fn hhbc_new_col_map() -> *HackMixed)]
    NewColMap,
    #[decl(fn hhbc_new_col_pair() -> *HackMixed)]
    NewColPair,
    #[decl(fn hhbc_new_col_set() -> *HackMixed)]
    NewColSet,
    #[decl(fn hhbc_new_col_vector() -> *HackMixed)]
    NewColVector,
    #[decl(fn hhbc_new_dict() -> *HackMixed)]
    NewDictArray,
    #[decl(fn hhbc_new_keyset_array(...) -> *HackMixed)]
    NewKeysetArray,
    #[decl(fn hhbc_new_vec(...) -> *HackVec)]
    NewVec,
    #[decl(fn hhbc_not(*HackMixed) -> *HackMixed)]
    Not,
    #[decl(fn hhbc_print(*HackMixed) -> *HackMixed)]
    Print,
    #[decl(fn hhbc_sub(*HackMixed, *HackMixed) -> *HackMixed)]
    Sub,
    #[decl(fn hhbc_throw(*HackMixed) -> noreturn)]
    Throw,
    #[decl(fn hhbc_verify_param_type_ts(obj: *HackMixed, ts: *HackMixed) -> void)]
    VerifyParamTypeTS,
}

#[derive(TextualDecl)]
pub(crate) enum Builtin {
    /// Allocate an array with the given number of words (a word is a
    /// pointer-sized value).
    #[decl(fn alloc_words(int) -> *void)]
    AllocWords,
    /// Await for a value returned by an async function.
    #[decl(fn await(*HackMixed) -> *HackMixed)]
    Await,
    /// Get the superglobal as a base.
    #[decl(fn hack_base_get_superglobal(name: *HackMixed) -> **HackMixed)]
    BaseGetSuperglobal,
    /// Turns a raw boolean into a HackMixed.
    #[decl(fn hack_bool(int) -> *HackBool)]
    Bool,
    /// Append a new value to a base.
    #[decl(fn hack_dim_array_append(base: **HackMixed) -> **HackMixed)]
    DimArrayAppend,
    /// Get the address of an indexed value from a base.
    #[decl(fn hack_dim_array_get(base: **HackMixed, index: *HackMixed) -> **HackMixed)]
    DimArrayGet,
    /// Get the address of a named field from a struct.
    #[decl(fn hack_dim_field_get(base: **HackMixed, name: *HackMixed) -> **HackMixed)]
    DimFieldGet,
    /// Gets a named field from a struct.
    #[decl(fn hack_dim_field_get_or_null(base: **HackMixed, name: *HackMixed) -> **HackMixed)]
    DimFieldGetOrNull,
    /// Turns a raw float into a Mixed.
    #[decl(fn hack_float(float) -> *HackFloat)]
    Float,
    /// Returns the Class identifier for the given class.
    #[decl(fn hack_get_class(*void) -> *class)]
    GetClass,
    /// Returns the Class identifier for the given class's static class.
    #[decl(fn hack_get_static_class(*void) -> *class)]
    GetStaticClass,
    /// Hhbc handlers.  See hphp/doc/bytecode.specification for docs.
    #[decl(skip)]
    Hhbc(Hhbc),
    /// Turns a raw int into a HackMixed.
    #[decl(fn hack_int(int) -> *HackInt)]
    Int,
    /// Returns true if the given HackMixed is truthy.
    #[decl(fn hack_is_true(*HackMixed) -> int)]
    IsTrue,
    /// Returns true if the given object is of the named type.
    #[decl(fn hack_is_type(obj: *HackMixed, ty: *HackString) -> *HackMixed)]
    IsType,
    /// Build a dict based on key/value pairs.
    #[decl(fn hack_new_dict(...) -> *HackMixed)]
    NewDict,
    /// Returns a HackMixed containing a `null`.
    #[decl(fn hack_null() -> *HackNull)]
    Null,
    /// Lazily initializes a static singleton.
    #[decl(fn lazy_initialize(*HackMixed) -> void)]
    SilLazyInitialize,
    /// Turns a raw string into a HackMixed.
    #[decl(fn hack_string(string) -> *HackString)]
    String,
    /// Checks that the predicate is true or throws a VerifyType error.
    #[decl(fn hhbc_verify_type_pred(obj: *HackMixed, pred: *HackMixed) -> void)]
    VerifyTypePred,
}

pub(crate) fn call_builtin(
    fb: &mut textual::FuncBuilder<'_, '_>,
    target: Builtin,
    params: impl textual::VarArgs,
) -> Result<Sid> {
    fb.call(&target.to_string(), params)
}

pub(crate) fn expr_builtin(target: Builtin, params: impl textual::VarArgs) -> textual::Expr {
    textual::Expr::call(target.to_string(), params)
}
