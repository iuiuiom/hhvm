<?hh

function gen() :AsyncGenerator<mixed,mixed,void>{
  yield 1;
  yield 2;
  try {
    $a = yield 3;
  }
 catch (Exception $e) {
    var_dump($e->getMessage());
    yield 4;
  }
  yield 5;
}

<<__EntryPoint>>
function main_2175() :mixed{
foreach (gen() as $x) {
 var_dump($x);
 }
$g = gen();
$g->next();
var_dump($g->current());
$g->next();
var_dump($g->current());
$g->next();
var_dump($g->current());
$g->raise(new Exception('foobar'));
var_dump($g->current());
$g->next();
var_dump($g->current());
}
