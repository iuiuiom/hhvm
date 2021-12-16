// Copyright (c) Facebook, Inc. and its affiliates.
//
// This source code is licensed under the MIT license found in the
// LICENSE file in the "hack" directory of this source tree.
use std::{
    fmt::{self, Arguments, Debug},
    io,
};
use thiserror::Error;

pub type Result<T> = std::result::Result<T, Error>;

#[macro_export]
macro_rules! not_impl {
    () => {
        Err(Error::NotImpl(format!("{}:{}", file!(), line!())))
    };
}

#[derive(Error, Debug)]
pub enum Error {
    #[error("write error: {0:?}")]
    WriteError(anyhow::Error),

    #[error("a string may contain invalid utf-8")]
    InvalidUTF8,

    //TODO(hrust): This is a temp error during porting
    #[error("NOT_IMPL: {0}")]
    NotImpl(String),

    #[error("Failed: {0}")]
    Fail(String),
}

impl Error {
    pub fn fail(s: impl Into<String>) -> Self {
        Self::Fail(s.into())
    }
}

impl From<std::io::Error> for Error {
    fn from(e: std::io::Error) -> Self {
        Error::WriteError(e.into())
    }
}

impl From<fmt::Error> for Error {
    fn from(e: fmt::Error) -> Self {
        Error::WriteError(e.into())
    }
}

pub trait Write {
    fn write_all(&mut self, s: &[u8]) -> Result<()>;
    fn write_fmt(&mut self, fmt: Arguments<'_>) -> Result<()>;
}

pub(crate) struct IoWrite<'a>(pub(crate) &'a mut dyn io::Write);

impl IoWrite<'_> {
    pub(crate) fn flush(&mut self) -> std::result::Result<(), io::Error> {
        self.0.flush()
    }
}

impl Write for IoWrite<'_> {
    fn write_all(&mut self, s: &[u8]) -> Result<()> {
        self.0.write_all(s)?;
        Ok(())
    }

    fn write_fmt(&mut self, fmt: Arguments<'_>) -> Result<()> {
        self.0.write_fmt(fmt)?;
        Ok(())
    }
}

pub(crate) fn newline<W: Write>(w: &mut W) -> Result<()> {
    w.write_all(b"\n")?;
    Ok(())
}

pub(crate) fn wrap_by_<W, F>(w: &mut W, s: &str, e: &str, f: F) -> Result<()>
where
    W: Write,
    F: FnOnce(&mut W) -> Result<()>,
{
    w.write_all(s.as_bytes())?;
    f(w)?;
    w.write_all(e.as_bytes())
}

pub(crate) fn wrap_by<W, F>(w: &mut W, s: &str, f: F) -> Result<()>
where
    W: Write,
    F: FnOnce(&mut W) -> Result<()>,
{
    wrap_by_(w, s, s, f)
}

macro_rules! wrap_by {
    ($name:ident, $left:expr, $right:expr) => {
        pub(crate) fn $name<W, F>(w: &mut W, f: F) -> Result<()>
        where
            W: Write,
            F: FnOnce(&mut W) -> Result<()>,
        {
            $crate::write::wrap_by_(w, $left, $right, f)
        }
    };
}

wrap_by!(braces, "{", "}");
wrap_by!(paren, "(", ")");
wrap_by!(quotes, "\"", "\"");
wrap_by!(triple_quotes, "\"\"\"", "\"\"\"");
wrap_by!(angle, "<", ">");
wrap_by!(square, "[", "]");

pub(crate) fn concat_str<W: Write, I: AsRef<str>>(w: &mut W, ss: impl AsRef<[I]>) -> Result<()> {
    concat(w, ss, |w, s| {
        w.write_all(s.as_ref().as_bytes())?;
        Ok(())
    })
}

pub(crate) fn concat_str_by<W: Write, I: AsRef<str>>(
    w: &mut W,
    sep: impl AsRef<str>,
    ss: impl AsRef<[I]>,
) -> Result<()> {
    concat_by(w, sep, ss, |w, s| {
        w.write_all(s.as_ref().as_bytes())?;
        Ok(())
    })
}

pub(crate) fn concat<W, T, F>(w: &mut W, items: impl AsRef<[T]>, f: F) -> Result<()>
where
    W: Write,
    F: FnMut(&mut W, &T) -> Result<()>,
{
    concat_by(w, "", items, f)
}

pub(crate) fn concat_by<W, T, F>(
    w: &mut W,
    sep: impl AsRef<str>,
    items: impl AsRef<[T]>,
    mut f: F,
) -> Result<()>
where
    W: Write,
    F: FnMut(&mut W, &T) -> Result<()>,
{
    let mut first = true;
    let sep = sep.as_ref();
    Ok(for i in items.as_ref() {
        if first {
            first = false;
        } else {
            w.write_all(sep.as_bytes())?;
        }
        f(w, i)?;
    })
}

pub(crate) fn option<W, T, F>(w: &mut W, i: impl Into<Option<T>>, mut f: F) -> Result<()>
where
    W: Write,
    F: FnMut(&mut W, T) -> Result<()>,
{
    match i.into() {
        None => Ok(()),
        Some(i) => f(w, i),
    }
}

pub(crate) fn option_or<W, T, F>(
    w: &mut W,
    i: impl Into<Option<T>>,
    f: F,
    default: impl AsRef<str>,
) -> Result<()>
where
    W: Write,
    F: Fn(&mut W, T) -> Result<()>,
{
    match i.into() {
        None => w.write_all(default.as_ref().as_bytes()),
        Some(i) => f(w, i),
    }
}
