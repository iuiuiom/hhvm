// @generated by hh_manual
enum Bits: int {
  B1 = 2;
  B2 = 4;
  B3 = 8;
 }

<<__EntryPoint>>
function main(): void {
  Bits::assert(2); // 2
  Bits::assert(16); // UnexpectedValueException

  Bits::coerce(2); // 2
  Bits::coerce(2.0); // null
  Bits::coerce(16); // null
}
