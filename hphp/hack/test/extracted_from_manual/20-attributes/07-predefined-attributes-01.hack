// @generated by hh_manual
<<__ConsistentConstruct>>
class Base {
  public function __construct() {}

  public static function make(): this {
    return new static();
  }
}

class Derived extends Base {
  public function __construct() {
    parent::__construct();
  }
}

function demo(): void {
  $v2 = Derived::make();
}
