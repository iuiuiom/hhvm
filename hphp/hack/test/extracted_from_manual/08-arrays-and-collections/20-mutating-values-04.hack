// @generated by hh_manual
function update_value(Vector<int> $items): void {
  $items[0] = 42;
  $items[] = 100;
}

function demo(): void {
  $v = Vector {1, 2};
  update_value($v);

  var_dump($v); // Vector {42, 2, 100}
}
