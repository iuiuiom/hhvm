<?hh


<<__EntryPoint>>
function main_xpath_node() :mixed{
$xml = simplexml_load_string(<<<EOF
<root>
  <block name="test" />
  <test>
    <blob>test</blob>
  </test>
</root>
EOF
);

$block = $xml->xpath("//block[@name='test']");
$block[0]->addAttribute('attr', '1');

var_dump((bool)$block[0]->attributes()->attr);
var_dump((bool)$xml->children()->block->attributes()->attr);
}
