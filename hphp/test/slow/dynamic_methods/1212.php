<?hh

function t($x) :mixed{
  var_dump($x);
}
class z {
  function q() :mixed{
    $x = varray[1,2,3];
    array_map(varray['z', 'p'], $x);
  }
  <<__DynamicallyCallable>> static function p($x) :mixed{
    var_dump($x);
  }
}

<<__EntryPoint>>
function main_1212() :mixed{
$x = varray[1,2,3];
array_map(t<>, $x);
$m = new z();
$m->q();
}
