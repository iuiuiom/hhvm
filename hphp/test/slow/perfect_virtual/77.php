<?hh

class A {
 function foo($a = 123) :mixed{
 var_dump(__CLASS__);
}
}
 class B extends A {
 function foo($b = 123) :mixed{
 var_dump(__CLASS__);
}
}
 function bar() :mixed{
   $obj = new A;
 $obj->foo();
  $obj = new B;
 $obj->foo();
}

 <<__EntryPoint>>
function main_77() :mixed{
bar();
}
