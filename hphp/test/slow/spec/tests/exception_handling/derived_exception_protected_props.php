<?hh

class DerivedException extends Exception {
  protected string $message = 'Derived message';
  protected int $code = 12345;
}
<<__EntryPoint>> function main(): void {
try {
  throw new DerivedException; // from init
} catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL;
  echo $e->getCode() . PHP_EOL;
}

try {
  throw new DerivedException('Foo'); // override message
} catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL;
  echo $e->getCode() . PHP_EOL;
}

try {
  throw new DerivedException('Foo', 10); // override message and code
} catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL;
  echo $e->getCode() . PHP_EOL;
}

throw new DerivedException;
}
