<?hh

class C<reify T> {}

function f<reify T>(T $x): C<T> {
  var_dump(HH\ReifiedGenerics\get_type_structure<T>());
  return new C<int>();
}

function wrap($fun) :mixed{
  try {
    $fun();
  } catch (Throwable $e) {
    print $e->getMessage()."\n";
  }
}

<<__EntryPoint>>
function main(): void {
  $f = f<int>;

  wrap(() ==> { $f(1); }); // Success
}
