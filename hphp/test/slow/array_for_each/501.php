<?hh

function main() :mixed{
  echo "Entering main\n";
  foreach (darray[1 => 1] as $k => $v) {
    break;
  }
  echo "Leaving main\n";
}

<<__EntryPoint>>
function main_501() :mixed{
main();
}
