// @generated by hh_manual from manual/hack/08-arrays-and-collections/05-vec-keyset-and-dict.md
// @codegen-command : buck run fbcode//hphp/hack/src/hh_manual:hh_manual extract fbcode/hphp/hack/manual/hack/
// Creating a keyset.
function get_items(): keyset<string> {
  $items = keyset['a', 'b', 'c'];
  return $items;
}
