<?hh

function foo($x, $y) :mixed{
  return $x.$y;
}

class dtor {
  private $i;
  function __construct($i) { $this->i = $i; }
  function __toString() :mixed{ echo "toString: $this->i\n"; return "a"; }
}

function go() :mixed{
  foo(new dtor(1), new dtor(2));
  foo(new dtor(3), new dtor(4));
  foo(new dtor(5), new dtor(6));
  foo(new dtor(7), new dtor(8));
}


<<__EntryPoint>>
function main_concat_dtor() :mixed{
  go();
  var_dump(HH\objprof_get_data());
}
