// @generated by hh_manual
function takes_format_string(
  \HH\FormatString<\PlainSprintf> $format,
  mixed ...$args
): void {}

function use_it(): void {
  takes_format_string("First: %d, second: %s", 1, "foo");
}
