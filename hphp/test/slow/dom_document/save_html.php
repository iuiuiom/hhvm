<?hh


<<__EntryPoint>>
function main_save_html() :mixed{
$doc = new DOMDocument('1.0');

$root = $doc->createElement('html');
$doc->appendChild($root);

$head = $doc->createElement('head');
$root->appendChild($head);

$title = $doc->createElement('title');
$head->appendChild($title);

$text = $doc->createTextNode('Unit Test');
$title->appendChild($text);

$body = $doc->createElement('body');
$root->appendChild($body);

var_dump($doc->saveHTML());
var_dump($doc->saveHTML($head));
}
