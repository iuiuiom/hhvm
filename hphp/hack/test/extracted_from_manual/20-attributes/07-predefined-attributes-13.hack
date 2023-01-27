// @generated by hh_manual
class Button {
  public function draw(): void { /* ... */ }
}

trait MyButtonTrait {
  // This makes the relationship with Button explicit.
  require extends Button;

  public function draw(): void { /* ... */ }
}

class ExampleButton extends Button {
  use MyButtonTrait;
}
