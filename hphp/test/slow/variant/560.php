<?hh


<<__EntryPoint>>
function main_560() :mixed{
$a=1;
$a='t';
 $b = $a;
 $b[0] = 'AB';
 var_dump($a);
 var_dump($b);
}
