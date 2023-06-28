<?hh
namespace test;

class Test {
  <<__DynamicallyCallable>>
    static function foo() :mixed{
        echo __CLASS__,"::",__FUNCTION__,"\n";
    }
}

<<__DynamicallyCallable>>
function foo() :mixed{
    echo __FUNCTION__,"\n";
}
<<__EntryPoint>> function main(): void {
\call_user_func(__NAMESPACE__."\\foo");
\call_user_func(__NAMESPACE__."\\Test::foo");
}
