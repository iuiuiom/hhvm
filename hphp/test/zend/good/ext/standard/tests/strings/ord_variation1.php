<?hh

/* Prototype  : int ord  ( string $string  )
 * Description: Return ASCII value of character
 * Source code: ext/standard/string.c
*/

//defining a class
class sample  {
  public function __toString() :mixed{
    return "sample object";
  }
}
<<__EntryPoint>> function main(): void {
echo "*** Testing ord() function: with unexpected inputs for 'string' argument ***\n";


//getting the resource
$file_handle = fopen(__FILE__, "r");

// array with different values for $input
$inputs =  varray [

/*1*/      0,
          1,
          255,
          256,
          2147483647,
          -2147483648,

          // float values
/*7*/      10.5,
          -20.5,
          10.1234567e10,

          // array values
/*10*/      varray[],
          varray[0],
          varray[1, 2],

          // boolean values
/*13*/      true,
          false,
          TRUE,
          FALSE,

          // null values
/*17*/      NULL,
          null,

          // objects
/*19*/      new sample(),

          // resource
/*20*/      $file_handle,
];

// loop through with each element of the $string array to test ord() function
$count = 1;
foreach($inputs as $input) {
  echo "-- Iteration $count --\n";
  try { var_dump( ord($input) ); } catch (Exception $e) { echo "\n".'Warning: '.$e->getMessage().' in '.__FILE__.' on line '.__LINE__."\n"; }
  $count ++;
}

fclose($file_handle);  //closing the file handle

echo "===DONE===\n";
}
