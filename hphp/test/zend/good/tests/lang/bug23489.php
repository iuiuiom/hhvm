<?hh
class Test {
  function __construct() {
    ob_start(
      varray[
        $this, 'transform'
      ]
    );
  }

  <<__DynamicallyCallable>> function transform($buffer) :mixed{
    return 'success';
  }
}
<<__EntryPoint>> function main(): void {
$t = new Test;
echo "failure";
}
