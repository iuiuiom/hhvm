<?hh
/**
 * replicate a var dump of an array but outputted string values are base64 encoded
 *
 * @param array $regs
 */
function base64_encode_var_dump($regs) :mixed{
	if ($regs) {
		echo "array(" . count($regs) . ") {\n";
		foreach ($regs as $key => $value) {
			echo "  [$key]=>\n  ";
			if (is_string($value)) {
				var_dump(base64_encode($value));
			} else {
				var_dump($value);
			}
		}
		echo "}\n";
	} else {
		echo "NULL\n";
	}
}

<<__EntryPoint>>
function main_entry(): void {
  /* Prototype  : int mb_ereg(string $pattern, string $string [, array $registers])
   * Description: Regular expression match for multibyte string
   * Source code: ext/mbstring/php_mbregex.c
   */

  /*
   * Testing the following regular expression features match correctly:
   * 1. definite quantifiers
   * 2. Alternation
   * 3. subpatterns in parentheses
   */

  echo "*** Testing mb_ereg() : usage variations ***\n";

  if(mb_regex_encoding('utf-8') == true) {
  	echo "Regex encoding set to utf-8\n";
  } else {
  	echo "Could not set regex encoding to utf-8\n";
  }

  $string_ascii = b'This is an English string. 0123456789.';
  $regex_ascii = b'([A-Z]\w{1,4}is( [aeiou]|h)) ?.*\.\s[0-9]+(5([6-9][79]){2})[[:punct:]]$';
  $regs_ascii = null;
  var_dump(mb_ereg($regex_ascii, $string_ascii, inout $regs_ascii));
  base64_encode_var_dump($regs_ascii);

  $string_mb = base64_decode('zpHPhc+Ez4wgzrXOr869zrHOuSDOtc67zrvOt869zrnOus+MIM66zrXOr868zrXOvc6/LiAwMTIzNDU2Nzg5Lg==');
  $regex_mb = base64_decode("W86RLc6pXShcdysgKSvOtVvOsS3PiVxzXSvOui4qKM+MfM6/KS4qXC5cc1swLTldKyg1KFs2LTldWzc5XSl7Mn0pW1s6cHVuY3Q6XV0k");
  $regs_mb = null;
  var_dump(mb_ereg($regex_mb, $string_mb, inout $regs_mb));
  base64_encode_var_dump($regs_mb);

  echo "Done";
}
