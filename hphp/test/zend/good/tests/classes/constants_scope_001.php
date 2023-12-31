<?hh

class ErrorCodes {
    const FATAL = "Fatal error\n";
    const WARNING = "Warning\n";
    const INFO = "Informational message\n";

    static function print_fatal_error_codes() :mixed{
        echo "self::FATAL = " . self::FATAL;
    }
}

class ErrorCodesDerived extends ErrorCodes {
    const FATAL = "Worst error\n";
    static function print_fatal_error_codes() :mixed{
        echo "self::FATAL = " . self::FATAL;
        echo "parent::FATAL = " . parent::FATAL;
    }
}

/* Call the static function and move into the ErrorCodes scope */
<<__EntryPoint>> function main(): void {
ErrorCodes::print_fatal_error_codes();
ErrorCodesDerived::print_fatal_error_codes();
}
