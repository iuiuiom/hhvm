(*
 * Copyright (c) 2015, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the "hack" directory of this source tree.
 *
 *)

open Core_kernel
open Ifc_types

(* Shallow mappers *)

let rec ptype fty fpol = function
  | Tprim pol -> Tprim (fpol pol)
  | Tgeneric pol -> Tgeneric (fpol pol)
  | Ttuple tl -> Ttuple (List.map ~f:fty tl)
  | Tunion tl -> Tunion (List.map ~f:fty tl)
  | Tinter tl -> Tinter (List.map ~f:fty tl)
  | Tclass cls ->
    Tclass
      {
        c_name = cls.c_name;
        c_self = fpol cls.c_self;
        c_lump = fpol cls.c_lump;
        c_properties = SMap.map fpol cls.c_properties;
      }
  | Tfun f -> Tfun (fun_ fty fpol f)

and fun_ fty fpol f =
  let ptype = ptype fty fpol in
  {
    f_pc = fpol f.f_pc;
    f_self = fpol f.f_self;
    f_args = List.map ~f:ptype f.f_args;
    f_ret = ptype f.f_ret;
    f_exn = ptype f.f_exn;
  }

(* "fprop: int -> prop -> prop" takes as first argument the
   number of binders under which the prop argument is; it is
   initialized by the "depth" argument *)
let prop fpol fprop depth = function
  | Ctrue -> Ctrue
  | Cquant (q, n, c) -> Cquant (q, n, fprop (depth + n) c)
  | Ccond ((pos, p, x), ct, ce) ->
    Ccond ((pos, fpol p, x), fprop depth ct, fprop depth ce)
  | Cconj (cl, cr) -> Cconj (fprop depth cl, fprop depth cr)
  | Cflow (pos, p1, p2) -> Cflow (pos, fpol p1, fpol p2)
  | Chole (pos, proto) ->
    if phys_equal fpol Ifc_utils.identity then
      Chole (pos, proto)
    else
      (* "pty_map pty" applies fpol to all the policies in the
         flow type pty *)
      let rec pty_map pty = ptype pty_map fpol pty in
      let proto =
        {
          fp_name = proto.fp_name;
          fp_this = Option.map ~f:pty_map proto.fp_this;
          fp_type = fun_ pty_map fpol proto.fp_type;
        }
      in
      Chole (pos, proto)
