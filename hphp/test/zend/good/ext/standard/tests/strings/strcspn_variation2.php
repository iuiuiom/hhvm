<?hh
/* Prototype  : proto int strcspn(string str, string mask [, int start [, int len]])
 * Description: Finds length of initial segment consisting entirely of characters not found in mask.
        If start or/and length is provided works like strcspn(substr($s,$start,$len),$bad_chars)
 * Source code: ext/standard/string.c
 * Alias to functions: none
*/

/*
* Testing strcspn() : with different unexpected values for mask argument
*/

// declaring class
class sample  {
  public function __toString() :mixed{
    return "object";
  }
}
<<__EntryPoint>> function main(): void {
error_reporting(E_ALL & ~E_NOTICE);

echo "*** Testing strcspn() : with different unexpected values of mask argument ***\n";

$str = 'string_val';
$start = 1;
$len = 10;



// creating a file resource
$file_handle = fopen(__FILE__, 'r');


//array of values to iterate over
$values = varray[

      // int data
      0,
      1,
      12345,
      -2345,

      // float data
      10.5,
      -10.5,
      10.1234567e10,
      10.7654321E-10,
      .5,

      // array data
      varray[],
      varray[0],
      varray[1],
      varray[1, 2],
      darray['color' => 'red', 'item' => 'pen'],

      // null data
      NULL,
      null,

      // boolean data
      true,
      false,
      TRUE,
      FALSE,

      // empty data
      "",
      '',

      // object data
      new sample(),



      // resource
      $file_handle
];

// loop through each element of the array for mask

foreach($values as $value) {
      $text = HH\is_any_array($value) ? 'Array' : $value; echo "\n-- Iteration with mask value as \"$text\" --\n";
      try { var_dump( strcspn($str,$value) ); } catch (Exception $e) { echo "\n".'Warning: '.$e->getMessage().' in '.__FILE__.' on line '.__LINE__."\n"; } // with defalut args
      try { var_dump( strcspn($str,$value,$start) ); } catch (Exception $e) { echo "\n".'Warning: '.$e->getMessage().' in '.__FILE__.' on line '.__LINE__."\n"; } // with default len value
      try { var_dump( strcspn($str,$value,$start,$len) ); } catch (Exception $e) { echo "\n".'Warning: '.$e->getMessage().' in '.__FILE__.' on line '.__LINE__."\n"; } // with all args
};

// close the resource
fclose($file_handle);

echo "Done";
}
