// @generated by hh_manual from manual/hack/11-built-in-types/34-enum.md
// @codegen-command : buck run fbcode//hphp/hack/src/hh_manual:hh_manual extract fbcode/hphp/hack/manual/hack/
enum Position: int {
  Top = 0;
  Bottom = 1;
  Left = 2;
  Right = 3;
  Center = 4;
}

function writeText(string $text, Position $pos): void {
  switch ($pos) {
    case Position::Top:
      // ...
      break;
    case Position::Center:
      // ...
      break;
    case Position::Right:
      // ...
      break;
    case Position::Left:
      // ...
      break;
    case Position::Bottom:
      // ...
      break;
  }
}

<<__EntryPoint>>
function main(): void {
  writeText("Hello", Position::Bottom);
  writeText("Today", Position::Left);
}
