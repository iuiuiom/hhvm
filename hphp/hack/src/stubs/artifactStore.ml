(*
 * Copyright (c) Facebook, Inc. and its affiliates.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the "hack" directory of this source tree.
 *
 *)

type artifact =
  (* Just a plain value *)
  | Inline_artifact of string
  (* An artifact that is a directory *)
  | Path_artifact of Path.t
[@@deriving show]

type file_system_mode =
  | Local
  | Distributed
[@@deriving show]

type config = {
  mode: file_system_mode;
  temp_dir: Path.t;
  max_cas_bytes: int;
  max_inline_bytes: int;
}

let file_system_mode_of_string mode_str =
  match mode_str with
  | "Local" -> Some Local
  | "Distributed" -> Some Distributed
  | _ -> None

let string_of_file_system_mode file_system_mode =
  match file_system_mode with
  | Local -> "Local"
  | Distributed -> "Distributed"

let default_config ~temp_dir =
  {
    mode = Distributed;
    temp_dir;
    max_cas_bytes = 50_000;
    max_inline_bytes = 2000;
  }
