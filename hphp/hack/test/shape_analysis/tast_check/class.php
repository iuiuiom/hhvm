<?hh

class C {
  public function f(bool $b): void {
    $d = dict['a' => 42, 'b' => true];
    if ($b) {
      $d['c'] = 'hi';
    }
    $d['f'] = 24.0;
  }

  public function g(bool $b): void {
    $d = dict['a' => 42, 'b' => true];
    if ($b) {
      $d['c'] = 'hi';
    }
    $d['f'] = 24.0;
  }
}
