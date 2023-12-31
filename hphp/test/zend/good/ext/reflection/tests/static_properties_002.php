<?hh

class base {
    static protected $prop = 2;

    static function show() :mixed{
        echo __METHOD__ . '(' . self::$prop . ")\n";
    }

    static function inc() :mixed{
        base::$prop++;
        echo __METHOD__ . "()\n";
    }
}

class derived extends base {
    static public $prop = 2;

    static function show() :mixed{
        echo __METHOD__ . '(' . self::$prop . ")\n";
    }

    static function inc() :mixed{
        derived::$prop++;
        echo __METHOD__ . "()\n";
    }
}
<<__EntryPoint>> function main(): void {
base::show();
derived::show();

base::inc();

base::show();
derived::show();

derived::inc();

base::show();
derived::show();

$r = new ReflectionClass('derived');
echo 'Number of properties: '. count($r->getStaticProperties()) . "\n";

echo "Done\n";
}
