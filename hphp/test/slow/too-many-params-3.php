<?hh

function f($x, $y = 1):mixed{
  echo "done\n";
}

<<__EntryPoint>>
function main(): void {
  f(1, 2, 3);
  f(1, 2, 3, ...vec[]);
  f(1, 2, ...vec[3]);
  f(1, ...vec[2, 3]);
  f(...vec[1, 2, 3]);

  f(1, 2);
  f(1, 2, ...vec[]);
  f(1, ...vec[2]);
  f(...vec[1, 2]);

  f(1);
  f(1, ...vec[]);
  f(...vec[1]);
}
