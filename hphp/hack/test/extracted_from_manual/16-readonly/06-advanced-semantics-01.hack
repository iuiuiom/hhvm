// @generated by hh_manual
function readonly_closures_example2<T>(
  (function (): T) $regular_f,
  (readonly function(): T) $ro_f,
) : void {
  $ro_regular_f = readonly $regular_f; // readonly (function(): T)
  $ro_f; // (readonly function(): T)
  $ro_ro_f = readonly $ro_f; // readonly (readonly function(): T)
}
