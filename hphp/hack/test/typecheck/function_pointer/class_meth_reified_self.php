<?hh

final class Foo {
  public static function bar<reify T>(): void {}

  public function test(): void {
    self::bar<>;
  }
}
