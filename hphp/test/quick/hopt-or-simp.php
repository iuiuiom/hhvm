<?hh

function foo1() :mixed{
  $x = 2;
  $y = 3;
  return $x | $y;
}

function foo2() :mixed{
  $x = true;
  $y = false;
  return (int)($x || $y);
}

function foo3($x) :mixed{
  return 0 | $x;
}

function foo4($x) :mixed{
  return $x | $x;
}

function foo5($x) :mixed{
  return (-1) | $x;
}

function foo6($x, $y, $z) :mixed{
  return ($x & $y) | ($x & $z);
}

function foo7($x, $y, $z) :mixed{
  return ($y & $x) | ($x & $z);
}

function foo8($x, $y, $z) :mixed{
  return ($x & $y) | ($z & $x);
}

function foo9($x, $y, $z) :mixed{
  return ($y & $x) | ($z & $x);
}
<<__EntryPoint>> function main(): void {
var_dump(foo1());
var_dump(foo2());
var_dump(foo3(4));
var_dump(foo4(4));
var_dump(foo5(4));
var_dump(foo6(4,6,7));
var_dump(foo7(4,6,7));
var_dump(foo8(4,6,7));
var_dump(foo9(4,6,7));
}
