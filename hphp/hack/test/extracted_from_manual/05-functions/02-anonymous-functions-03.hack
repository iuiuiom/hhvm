// @generated by hh_manual
async function example_snippet_wrapper(): Awaitable<void> {
  $x = 5;
  $f = $x ==> $x + 1;
  
  $six = $f($x); // pass by value
  
  echo($six); // result of 6
  echo("\n");
  echo($x); // $x is unchanged; result of 5
}
