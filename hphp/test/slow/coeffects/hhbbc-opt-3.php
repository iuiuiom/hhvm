<?hh

function foo()[write_props] :mixed{}

function g1(mixed $x, mixed $y)[ctx $x] :mixed{ echo "in g1\n"; }
function g2(mixed $x, mixed $y, ...$z)[ctx $x] :mixed{ echo "in g2\n"; }
function g3<reify T1, reify T2>(mixed $x, mixed $y, ...$z)[ctx $x] :mixed{
  echo "in g3\n";
}
function g4<reify T1, reify T2>(mixed $x, mixed $y)[ctx $x] :mixed{ echo "in g4\n"; }

function f(mixed $y, mixed $x, $z)[ctx $x] :mixed{
  g1($x, $y);
  g2($x, $y, ...$z);
  g3<int, string>($x, $y, ...$z);
  g4<int, string>($x, $y);
}

<<__EntryPoint>>
function main() :mixed{
  f(1, foo<>, vec[1,2]);
}
