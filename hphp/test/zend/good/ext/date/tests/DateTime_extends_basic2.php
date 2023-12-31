<?hh

class DateTimeExt extends DateTime
{
	public function __construct ($date = null, ?DateTimeZone  $dtz = null)
    {
        if($dtz === null)
        {
            $dtz = new DateTimeZone(date_default_timezone_get());
        }
        parent::__construct($date, $dtz);
    }
}
<<__EntryPoint>>
function main_entry(): void {

  //Set the default time zone 
  date_default_timezone_set("Europe/London");

  echo "*** Testing new DateTime() : with user space __construct magic method ***\n";

  $d = new DateTimeExt("1967-05-01 22:30:41");
  echo $d->format("F j, Y, g:i:s a") . "\n"; 

  echo "===DONE===\n";
}
