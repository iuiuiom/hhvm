<?hh

function x() :mixed{}


<<__EntryPoint>>
function main_repeat() :mixed{
for ($i = 0; $i < 128; $i++) {
  $t = new IntervalTimer(0.1, 0.1, () ==> {});
  $t->start();
  x();
  $t->stop();
}
var_dump($i);
}
