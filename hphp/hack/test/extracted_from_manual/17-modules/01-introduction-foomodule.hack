//// module.hack
// @generated by hh_manual
new module foo {}

//// foo_class.hack
module foo;

public class Foo {}
internal class FooInternal {
  public function foo(): void {}
  internal function bar(): void {}
}
internal function foo_fun(): void {}
