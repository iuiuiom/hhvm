<?hh


<<__EntryPoint>>
function main_idn_to_unicode() :mixed{
var_dump(idn_to_unicode("www.xn--mnsjonasson-x8a.se") ===
    "www.m\xc3\xa5nsjonasson.se");
var_dump(idn_to_unicode("www.facebook.com"));
var_dump(idn_to_unicode("www.xn--12345678901234567890123456789".
                    "012345678901234mnsjonasson-5we.se")
                    ===
    "www.12345678901234567890123456789".
    "012345678901234m\xc3\xa5nsjonasson.se");
}
