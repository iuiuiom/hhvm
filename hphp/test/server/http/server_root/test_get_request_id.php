<?hh

<<__EntryPoint>>
function test_get_request_id_entry_point() :mixed{
  var_dump(HH\hphp_get_logger_request_id());
}

