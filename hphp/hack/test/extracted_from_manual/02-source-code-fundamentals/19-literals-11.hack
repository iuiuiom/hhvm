// @generated by hh_manual from manual/hack/02-source-code-fundamentals/19-literals.md
// @codegen-command : buck run fbcode//hphp/hack/src/hh_manual:hh_manual extract fbcode/hphp/hack/manual/hack/
type IdSet = shape('id' => ?string, 'url' => ?string, 'count' => int);

function get_IdSet(): IdSet {
  return shape('id' => null, 'url' => null, 'count' => 0);
}
