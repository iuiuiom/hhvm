<?hh

function foo(inout $x) :mixed{}

function main() :mixed{
  $x = varray[1, Vector{1,varray['a', 'b', 'c'],3}];
  foo(inout $x[1][1][1]);
}


<<__EntryPoint>>
function main_bad_call_10() :mixed{
main();
}
