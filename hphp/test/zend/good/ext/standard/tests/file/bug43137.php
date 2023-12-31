<?hh
<<__EntryPoint>> function main(): void {
chdir(sys_get_temp_dir());
$toname = "TO_" . md5(microtime());
$dirname = "FROM_" . md5(microtime());

mkdir($dirname);
var_dump(is_dir($dirname)); // Expected: true
rename($dirname, $toname);
var_dump(is_dir($dirname)); // Expected: false
var_dump(is_dir($toname)); // Expected: true
rmdir($toname);
var_dump(is_dir($toname)); // Expected: false
}
