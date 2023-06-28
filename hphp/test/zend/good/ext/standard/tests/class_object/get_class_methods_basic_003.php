<?hh
/* Prototype  : proto array get_class_methods(mixed class)
 * Description: Returns an array of method names for class or class instance.
 * Source code: Zend/zend_builtin_functions.c
 * Alias to functions:
 */

/*
 * Test behaviour with interfaces.
 */

interface I {
    public function pubI():mixed;

}

class C implements I {
    public function pubI() :mixed{}

    private function privC() :mixed{}
    protected function protC() :mixed{}
    public function pubC() :mixed{}

    public static function testFromC() :mixed{
        echo "Accessing I from C:\n";
        var_dump(get_class_methods("I"));
        echo "Accessing C from C:\n";
        var_dump(get_class_methods("C"));
    }
}

<<__EntryPoint>> function get_class_methods_basic_003(): void {
echo "Accessing I from global scope:\n";
var_dump(get_class_methods("I"));
echo "Accessing C from global scope:\n";
var_dump(get_class_methods("C"));
C::testFromC();
echo "Done";
}
