// Copyright (c) Facebook, Inc. and its affiliates.
//
// This source code is licensed under the MIT license found in the
// LICENSE file in the "hack" directory of this source tree.

//! Helpers for FuncBuilder emitting Textual specific constructs during lowering.

use std::borrow::Cow;

use ir::FuncBuilder;
use ir::Instr;
use ir::LocId;
use ir::ValueId;

use crate::hack;

pub(crate) trait FuncBuilderEx {
    /// Build a hack::Builtin call.
    fn hack_builtin(&mut self, _builtin: hack::Builtin, _args: &[ValueId], _loc: LocId) -> Instr;

    fn emit_hack_builtin(
        &mut self,
        builtin: hack::Builtin,
        args: &[ValueId],
        loc: LocId,
    ) -> ValueId;

    fn todo_instr(&mut self, reason: &str, loc: LocId) -> Instr;

    fn emit_todo_instr(&mut self, reason: &str, loc: LocId) -> ValueId;
}

impl<'a> FuncBuilderEx for FuncBuilder<'a> {
    fn hack_builtin(&mut self, builtin: hack::Builtin, args: &[ValueId], loc: LocId) -> Instr {
        let target = Cow::Owned(builtin.to_string());
        let values = args.to_vec().into_boxed_slice();
        Instr::Special(ir::instr::Special::Textual(
            ir::instr::Textual::HackBuiltin {
                target,
                values,
                loc,
            },
        ))
    }

    fn emit_hack_builtin(
        &mut self,
        builtin: hack::Builtin,
        args: &[ValueId],
        loc: LocId,
    ) -> ValueId {
        let instr = self.hack_builtin(builtin, args, loc);
        self.emit(instr)
    }

    fn todo_instr(&mut self, reason: &str, loc: LocId) -> Instr {
        textual_todo! {
            use ir::FuncBuilderEx;
            self.todo_fake_instr(reason, loc)
        }
    }

    fn emit_todo_instr(&mut self, reason: &str, loc: LocId) -> ValueId {
        let instr = self.todo_instr(reason, loc);
        self.emit(instr)
    }
}
