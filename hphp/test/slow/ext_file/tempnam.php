<?hh


<<__EntryPoint>>
function main_tempnam() :mixed{
$x = tempnam(sys_get_temp_dir()."/", "xxxx");
var_dump(strpos($x, '//') === false);

$x = tempnam(sys_get_temp_dir()."//", "xxxx");
var_dump(strpos($x, '//') === false);

$x = tempnam(sys_get_temp_dir()."///", "xxxx");
var_dump(strpos($x, '//') === false);
}
