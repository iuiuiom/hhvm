<?hh

/*
 * Try parsing different Locales
 * with Procedural and Object methods.
 */

function ut_main()
:mixed{
    $loc_parts_arr1 = darray[
        Locale::LANG_TAG =>'sl' ,
        Locale::SCRIPT_TAG =>'Latn' ,
        Locale::REGION_TAG =>'IT'
    ];
    $loc_parts_arr2 = darray[
        Locale::LANG_TAG =>'de' ,
        Locale::REGION_TAG =>'DE'
    ];
    $loc_parts_arr3 = darray[
        Locale::LANG_TAG =>'hi'
    ];
    $loc_parts_arr4 = darray[
        Locale::LANG_TAG =>'zh' ,
        Locale::SCRIPT_TAG =>'Hans' ,
        Locale::REGION_TAG =>'CN'
    ];
    $loc_parts_arr5 = darray[
        Locale::LANG_TAG =>'es' ,
        Locale::SCRIPT_TAG =>'Hans' ,
        Locale::REGION_TAG =>'CN'
    ];
    $loc_parts_arr6 = darray[
        Locale::LANG_TAG =>'en' ,
        Locale::SCRIPT_TAG =>'Hans' ,
        Locale::REGION_TAG =>'CN',
        Locale::VARIANT_TAG.'14' =>'rozaj' ,
        'variant1'=>'nedis'
    ];
    $loc_parts_arr7 = darray[
        Locale::LANG_TAG =>'en' ,
        Locale::SCRIPT_TAG =>'Hans' ,
        Locale::REGION_TAG =>'CN',
        'variant14'=>'rozaj' ,
        'variant1'=>'nedis' ,
        'extlang0'=>'lng' ,
        'extlang1'=>'ing'
    ];
    $loc_parts_arr8 = darray[
        Locale::LANG_TAG =>'en' ,
        Locale::SCRIPT_TAG =>'Hans' ,
        Locale::REGION_TAG =>'CN',
        'variant14'=>'rozaj' ,
        'variant1'=>'nedis' ,
        'extlang0'=>'lng' ,
        'extlang1'=>'ing',
        'private7'=>'prv1' ,
        'private9'=>'prv2'
    ];
    $loc_parts_arr9 = darray[
        Locale::REGION_TAG =>'DE'
    ];
    $loc_parts_arr10 = darray[
        Locale::LANG_TAG => 45,
        Locale::REGION_TAG => false,
        Locale::SCRIPT_TAG => 15
    ];
    $loc_parts_arr11 = darray[
        Locale::LANG_TAG =>'de'  ,
        Locale::REGION_TAG =>'DE',
        'private0' => 13,
        'variant1' => varray[],
        'extlang2' => false
    ];
    $loc_parts_arr12 = darray[
        Locale::LANG_TAG =>'en' ,
        Locale::SCRIPT_TAG =>'Hans' ,
        Locale::REGION_TAG =>'CN',
        Locale::VARIANT_TAG => varray['nedis', 'rozaj'],
        Locale::PRIVATE_TAG => varray['prv1', 'prv2'],
        Locale::EXTLANG_TAG => varray['lng', 'ing']
    ];


    $loc_parts_arr = darray[
        'loc1' => $loc_parts_arr1,
        'loc2' => $loc_parts_arr2,
        'loc3' => $loc_parts_arr3,
        'loc4' => $loc_parts_arr4,
        'loc5' => $loc_parts_arr5,
        'loc6' => $loc_parts_arr6,
        'loc7' => $loc_parts_arr7,
        'loc8' => $loc_parts_arr8,
        'loc9' => $loc_parts_arr9,
        'loc10' => $loc_parts_arr10,
        'loc11' => $loc_parts_arr11,
        'loc12' => $loc_parts_arr12
    ];

    error_reporting( E_ERROR );

    $cnt  = 0;
    $res_str = '';
    foreach($loc_parts_arr as $key => $value ){
        $res_str .= "\n------------";
        $res_str .= "\nInput Array name is : loc".(++$cnt) ;
/*
        foreach($value as $valKey => $valValue ){
            $res_str .=  $valKey ."->".$valValue."  " ;
        }
*/

        $locale = ut_loc_locale_compose( $value);
        $res_str .= "\n\nComposed Locale: ";
        if ($locale) {
            $res_str .= "$locale";
        } else {
            $res_str .= "No values found from Locale compose due to the following error:\n";
            $res_str .= intl_get_error_message() ;
        }
    }

    $res_str .= "\n------------";
    $res_str .= "\n";
    return $res_str;

}

<<__EntryPoint>> function main_entry(): void {
    include_once( 'ut_common.inc' );
    ut_run();
}
