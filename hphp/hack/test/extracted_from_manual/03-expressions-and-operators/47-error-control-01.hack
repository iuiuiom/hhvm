// @generated by hh_manual from manual/hack/03-expressions-and-operators/47-error-control.md
// @codegen-command : buck run fbcode//hphp/hack/src/hh_manual:hh_manual extract fbcode/hphp/hack/manual/hack/
async function example_snippet_wrapper(): Awaitable<void> {
  $infile = @fopen("NoSuchFile.txt", 'r');
}
