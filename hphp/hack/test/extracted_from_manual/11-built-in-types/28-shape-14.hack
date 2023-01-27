// @generated by hh_manual
function takes_server(shape('name' => string, ?'age' => int) $s): void {
  $age = Shapes::idx($s, 'age', 0);
}

function example_usage(): void {
  takes_server(shape('name' => 'db-01', 'age' => 365));
  takes_server(shape('name' => 'db-02'));
}
