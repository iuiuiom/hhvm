// @generated by hh_manual from manual/hack/03-expressions-and-operators/25-subscript.md
// @codegen-command : buck run fbcode//hphp/hack/src/hh_manual:hh_manual extract fbcode/hphp/hack/manual/hack/
async function example_snippet_wrapper(): Awaitable<void> {
  $v = vec[10, 25, -6];
  $v[] = 99;    // creates new element with key 3, value 99
}
