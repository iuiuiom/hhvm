//// base-a-decl.php
<?hh


new module A {}

//// changed-a-decl.php
<?hh


// module A {}

//// base-a-use.php
<?hh

module A;

internal class FooA {}

//// changed-a-use.php
<?hh

module A;

internal class FooA {}
//// base-b-use.php
<?hh

module A;

internal function foobar(): void {}
//// changed-b-use.php
<?hh

module A;

internal function foobar(): void {}

//// base-c-use.php
<?hh

module A;

internal newtype Foo = int;
//// changed-c-use.php
<?hh

module A;

internal newtype Foo = int;
