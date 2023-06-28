<?hh

class Test1 {
  public $var1 = 1;
}

class Test2 {
  public $var1 = 2;
  public $var2 = "LONG_NOTICEABLE_STRING";
  public static $var3 = "I_AM_STATIC";
  public $var4;
  public static $var5;
}


<<__EntryPoint>>
function main_get_default_args() :mixed{
$refl = new ReflectionClass('Test2');

$props = $refl->getDefaultProperties();
for ($i = 1; $i <= 5; ++$i) {
  $key = "var$i";
  echo "$key => ".(string)$props[$key]."\n";
}
}
