<?hh
function dump($elems) :mixed{
	foreach ($elems as $elem) {
		var_dump($elem->nodeName);
		dump($elem->childNodes);
	}
}

<<__EntryPoint>>
function main() :mixed{
  $xml = <<<HERE
<?xml version="1.0" encoding="ISO-8859-1" ?>
<foo xmlns="http://www.example.com/ns/foo"
     xmlns:fubar="http://www.example.com/ns/fubar" attra="attra" />
HERE;

  $dom = new DOMDocument();
  $dom->loadXML($xml);
  $foo = $dom->documentElement;
  var_dump($foo->hasAttributeNS('http://www.example.com/ns/foo', 'attra'));
  var_dump($foo->getAttributeNS('http://www.example.com/ns/foo', 'attra'));

  $foo->setAttributeNS('http://www.example.com/ns/foo', 'attra', 'attranew');
  $foo->setAttributeNS('http://www.example.com/ns/fubar', 'attrb', 'attrbnew');
  $foo->setAttributeNS('http://www.example.com/ns/foo', 'attrc', 'attrc');

  var_dump($foo->getAttributeNS('http://www.example.com/ns/foo', 'attra'));
  var_dump($foo->getAttributeNS('http://www.example.com/ns/fubar', 'attrb'));
  var_dump($foo->getAttributeNS('http://www.example.com/ns/foo', 'attrc'));

  print $dom->saveXML();
}
