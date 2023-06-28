<?hh

interface ITest {
  const ITestConst = 42;
}
class Test implements ITest {
  public function foo($y = 'Test', $x = self::ITestConst) :mixed{
    var_dump($y::ITestConst);
    var_dump(static::ITestConst);
    var_dump(self::ITestConst);
    var_dump($x);
  }
}

<<__EntryPoint>>
function main_1619() :mixed{
$t = new Test();
$t->foo();
$rc = new ReflectionClass('Test');
$method = $rc->getMethod('foo');
foreach ($method->getParameters() as $param) {
  var_dump($param->getDefaultValue());
}
}
