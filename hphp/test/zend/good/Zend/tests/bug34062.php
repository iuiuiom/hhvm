<?hh
function f1() :mixed{ throw new Exception; }
function f2() :mixed{ echo "here\n"; }
<<__EntryPoint>> function main(): void {
try {
      // Currently it's the minimum required number of zeros
      // If you remove one, it won't crash
    max(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, f1());
} catch (Exception $e) {
    echo "(((\n";
    f2(0, 0, 0); // Won't crash if less than 3 zeros here
    echo ")))\n";
}
}
