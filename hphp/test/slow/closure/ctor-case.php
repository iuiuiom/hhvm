<?hh

class X extends CLOSURE {
  public function __construct()[] {}
  public static function __invoke() :mixed{ return 42; }
}

<<__EntryPoint>>
function main_ctor() :mixed{
$x = new X();
echo $x();
}
