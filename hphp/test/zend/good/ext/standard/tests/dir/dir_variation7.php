<?hh
/* 
 * Prototype  : object dir(string $directory[, resource $context])
 * Description: Directory class with properties, handle and class and methods read, rewind and close
 * Source code: ext/standard/dir.c
 */

/* 
 * remove the execute permission from the parent dir and test dir() on child dir
 *   1) remove write & execute permission from the 1st parent and test dir()
 *   2) remove execute permission from 2nd parent and test dir()
 */
<<__EntryPoint>> function main(): void {
echo "*** Testing dir() : remove execute permission from the parent dir ***\n";

/* create the temporary directory :
  dir_variation7  ( parent )
    |-> sub_dir    ( sub parent )
         |-> child_dir  ( child dir)
*/

$parent_dir_path = sys_get_temp_dir().'/'.'dir_variation7';
@mkdir($parent_dir_path);
chmod($parent_dir_path, 0777);

// create sub_dir
$sub_dir_path = $parent_dir_path."/sub_dir";
@mkdir($sub_dir_path);
chmod($sub_dir_path, 0777);

//create sub_sub_dir
$child_dir_path = $sub_dir_path."/child_dir";
@mkdir($child_dir_path);

// remove the write and execute permisson from sub parent
chmod($sub_dir_path, 0444);
echo "-- After restricting 1st level parent directory --\n";
$d = dir($child_dir_path); // try to open, expected failure
var_dump( $d ); // dump it

// remove the execute permisson from parent dir, allowing all permission for sub dir
chmod($sub_dir_path, 0777); // all permisson to sub dir
chmod($parent_dir_path, 0666); // restricting parent directory
echo "-- After restricting parent directory --\n";
$d = dir($child_dir_path); // try to open, expected failure
var_dump( $d ); // dump it

echo "Done";

// changing permissions for each temporary directory to delete them
chmod($parent_dir_path, 0777);
chmod($sub_dir_path, 0777);
chmod($child_dir_path, 0777);

rmdir($child_dir_path);
rmdir($sub_dir_path);
rmdir($parent_dir_path);
}
