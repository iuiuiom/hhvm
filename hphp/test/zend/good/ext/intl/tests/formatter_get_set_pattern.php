<?hh

/*
 * Get/set pattern.
 */


function ut_main()
:mixed{
    $res_str = '';
    $test_value = 12345.123456;
    $fmt = ut_nfmt_create( "en_US", NumberFormatter::PATTERN_DECIMAL );

    // Get default patten.
    $res_str .= "Default pattern: '" . ut_nfmt_get_pattern( $fmt ) . "'\n";
    $res_str .= "Formatting result: " . ut_nfmt_format( $fmt, $test_value ) . "\n";

    // Set a new pattern.
    $res = ut_nfmt_set_pattern( $fmt, "0.0" );
    if( $res === false )
        $res_str .= ut_nfmt_get_error_message( $fmt ) . " (" . ut_nfmt_get_error_code( $fmt ) . ")\n";

    // Check if the pattern has been changed.
    $res = ut_nfmt_get_pattern( $fmt );
    if( $res === false )
        $res_str .= ut_nfmt_get_error_message( $fmt ) . " (" . ut_nfmt_get_error_code( $fmt ) . ")\n";
    $res_str .= "New pattern: '" . ut_nfmt_get_pattern( $fmt ) . "'\n";
    $res_str .= "Formatted number: " . ut_nfmt_format( $fmt, $test_value ) . "\n";

    ut_nfmt_set_pattern($fmt, str_repeat('@', 200));
    $res_str .= "New pattern: '" . ut_nfmt_get_pattern( $fmt ) . "'\n";
    $res_str .= "Formatted number: " . ut_nfmt_format( $fmt, $test_value ) . "\n";

    return $res_str;
}

<<__EntryPoint>> function main_entry(): void {
    include_once( 'ut_common.inc' );
    ut_run();
}
