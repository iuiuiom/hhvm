// @generated by hh_manual
function update_value(inout vec<int> $items): void {
  $items[0] = 42;
  $items[] = 100;
}

function demo(): void {
  $v = vec[1, 2];
  update_value(inout $v);

  var_dump($v); // vec[42, 2, 100]
}
