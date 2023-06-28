<?hh

function comp_func($n1,$n2) :mixed{
  $n1=(int)$n1; $n2=(int)$n2;
  return $n1 === $n2 ? 0 : ($n1 > $n2 ? 1 : -1);
}


<<__EntryPoint>>
function main_array_udiff() :mixed{
$a = darray["0.1" => 9, "0.5" => 12, 0 => 23, 1 => 4, 2 => -15];
$b = darray["0.2" => 9, "0.5" => 22, 0 => 3, 1 => 4, 2 => -15];
$result = array_udiff($a, $b, comp_func<>);
var_dump($result);
}
