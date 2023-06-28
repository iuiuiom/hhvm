<?hh
class A
{
    private $p = "A::p";
    function showA()
:mixed    {
        echo $this->p . "\n";
    }
}

class B extends A
{
    protected static $p = "B::p (static)";
    static function showB()
:mixed    {
        echo self::$p . "\n";
    }
}

<<__EntryPoint>> function main(): void {
$a = new A;
$a->showA();

$b = new B;
$b->showA();
B::showB();
}
