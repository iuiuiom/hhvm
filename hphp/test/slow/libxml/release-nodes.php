<?hh
// c.f. http://3v4l.org/8Peti

function foo() :mixed{
  $d = new DOMDocument;
  $a = $d->createElement('foo', 'bar');
  $b = $d->createElement('fiz', 'buz');
  $c = $d->createElement('one', 'two');

  $a->appendChild($b);
  $b->appendChild($c);

  return $c;
}
<<__EntryPoint>> function main(): void {
$x = foo();
while ($x) {
  var_dump($x->tagName);
  $x = $x->parentNode;
}
}
