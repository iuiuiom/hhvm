<?hh <<__EntryPoint>> function main(): void {
$xml_element = new SimpleXMLElement('<root></root>');
$xml_element->node1 = 'a &#38; b';
print $xml_element->node1."\n";
$xml_element->node1 = 'a &#38; b';
print $xml_element->node1."\n";
$xml_element->addChild('node2','a &#38; b');
print $xml_element->node2."\n";
$xml_element->node2 = 'a & b';
print $xml_element->node2."\n";

print $xml_element->asXML();

echo "===DONE===\n";
}
