<?hh

<<__EntryPoint>>
function main(): void {
  echo "--- . with empty LHS ---\n";
  echo '' . 0;
  echo '' . -10;
  echo '' . 100;
  echo '' . 1.234;
  echo '' . -3.4e10;
  echo '' . INF;
  echo '' . -INF;
  echo '' . NAN;
  echo '' . true;
  echo '' . false;
  echo '' . null;
  echo '' . PHP_INT_MAX;
  echo '' . HH\stdin();
  echo '' . "string\n";

  echo "--- . with empty RHS ---\n";
  echo 0 . '';
  echo -10 . '';
  echo 100 . '';
  echo 1.234 . '';
  echo -3.4e10 . '';
  echo INF . '';
  echo -INF . '';
  echo NAN . '';
  echo true . '';
  echo false . '';
  echo null . '';
  echo PHP_INT_MAX . '';
  echo HH\stdin() . '';
  echo "string\n" . '';

  echo "--- . with non-empty LHS ---\n";
  echo '<' . 0;
  echo '<' . -10;
  echo '<' . 100;
  echo '<' . 1.234;
  echo '<' . -3.4e10;
  echo '<' . INF;
  echo '<' . -INF;
  echo '<' . NAN;
  echo '<' . true;
  echo '<' . false;
  echo '<' . null;
  echo '<' . PHP_INT_MAX;
  echo '<' . HH\stdin();
  echo '<' . "string\n";

  echo "--- concatN middle ---\n";
  echo '<' . 0 . '>';
  echo '<' . -10 . '>';
  echo '<' . 100 . '>';
  echo '<' . 1.234 . '>';
  echo '<' . -3.4e10 . '>';
  echo '<' . INF . '>';
  echo '<' . -INF . '>';
  echo '<' . NAN . '>';
  echo '<' . true . '>';
  echo '<' . false . '>';
  echo '<' . null . '>';
  echo '<' . PHP_INT_MAX . '>';
  echo '<' . HH\stdin() . '>';
  echo '<' . "string\n" . '>';

  echo "--- concatN left ---\n";
  echo 0 . ' string' . "\n";
  echo -10 . ' string' . "\n";
  echo 100 . ' string' . "\n";
  echo 1.234 . ' string' . "\n";
  echo -3.4e10 . ' string' . "\n";
  echo INF . ' string' . "\n";
  echo -INF . ' string' . "\n";
  echo NAN . ' string' . "\n";
  echo true . ' string' . "\n";
  echo false . ' string' . "\n";
  echo null . ' string' . "\n";
  echo PHP_INT_MAX . ' string' . "\n";
  echo HH\stdin() . ' string' . "\n";
  echo "string" . ' string' . "\n";

  echo "--- concatN emptystring left ---\n";
  echo '' . 0 . "\n";
  echo '' . -10 . "\n";
  echo '' . 100 . "\n";
  echo '' . 1.234 . "\n";
  echo '' . -3.4e10 . "\n";
  echo '' . INF . "\n";
  echo '' . -INF . "\n";
  echo '' . NAN . "\n";
  echo '' . true . "\n";
  echo '' . false . "\n";
  echo '' . null . "\n";
  echo '' . PHP_INT_MAX . "\n";
  echo '' . HH\stdin() . "\n";
  echo '' . "string" . "\n";

  echo "--- concatN emptystring right ---\n";
  echo 'value:' . 0 . '';
  echo 'value:' . -10 . '';
  echo 'value:' . 100 . '';
  echo 'value:' . 1.234 . '';
  echo 'value:' . -3.4e10 . '';
  echo 'value:' . INF . '';
  echo 'value:' . -INF . '';
  echo 'value:' . NAN . '';
  echo 'value:' . true . '';
  echo 'value:' . false . '';
  echo 'value:' . null . '';
  echo 'value:' . PHP_INT_MAX . '';
  echo 'value:' . HH\stdin() . '';
  echo 'value:' . "string" . '';

  echo "--- .= ---\n";
  $a = '';
  $a .= 0;
  $a .= -10;
  $a .= 100;
  $a .= 1.234;
  $a .= -3.4e10;
  $a .= INF;
  $a .= -INF;
  $a .= NAN;
  $a .= true;
  $a .= false;
  $a .= null;
  $a .= PHP_INT_MAX;
  $a .= HH\stdin();
  $a .= "string";
  echo "$a\n";

  $a = 0;           $a .= 'foo'; echo "$a\n";
  $a = -10;         $a .= 'foo'; echo "$a\n";
  $a = 100;         $a .= 'foo'; echo "$a\n";
  $a = 1.234;       $a .= 'foo'; echo "$a\n";
  $a = -3.4e10;     $a .= 'foo'; echo "$a\n";
  $a = INF;         $a .= 'foo'; echo "$a\n";
  $a = -INF;        $a .= 'foo'; echo "$a\n";
  $a = NAN;         $a .= 'foo'; echo "$a\n";
  $a = true;        $a .= 'foo'; echo "$a\n";
  $a = false;       $a .= 'foo'; echo "$a\n";
  $a = null;        $a .= 'foo'; echo "$a\n";
  $a = PHP_INT_MAX; $a .= 'foo'; echo "$a\n";
  $a = HH\stdin();  $a .= 'foo'; echo "$a\n";
  $a = "string";    $a .= 'foo'; echo "$a\n";
}
