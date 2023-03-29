/**
 * Autogenerated by Thrift for thrift/compiler/test/fixtures/constants/src/module.thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated @nocommit
 */

#include "thrift/compiler/test/fixtures/constants/gen-cpp2/module_constants.h"

#include <thrift/lib/cpp2/gen/module_constants_cpp.h>


namespace cpp2 {

constexpr ::std::int32_t const module_constants::myInt_;

constexpr char const * const module_constants::name_;

constexpr char const * const module_constants::multi_line_string_;

::std::vector<::std::map<::std::string, ::std::int32_t>> const& module_constants::states() {
  static folly::Indestructible<::std::vector<::std::map<::std::string, ::std::int32_t>>> const instance{std::initializer_list<::std::map<::std::string, ::std::int32_t>>{std::initializer_list<std::pair<const ::std::string, ::std::int32_t>>{{apache::thrift::StringTraits<std::string>::fromStringLiteral("San Diego"), static_cast<::std::int32_t>(3211000)},
  {apache::thrift::StringTraits<std::string>::fromStringLiteral("Sacramento"), static_cast<::std::int32_t>(479600)},
  {apache::thrift::StringTraits<std::string>::fromStringLiteral("SF"), static_cast<::std::int32_t>(837400)}},
  std::initializer_list<std::pair<const ::std::string, ::std::int32_t>>{{apache::thrift::StringTraits<std::string>::fromStringLiteral("New York"), static_cast<::std::int32_t>(8406000)},
  {apache::thrift::StringTraits<std::string>::fromStringLiteral("Albany"), static_cast<::std::int32_t>(98400)}}}};
  return *instance;
}

constexpr double const module_constants::x_;

constexpr double const module_constants::y_;

constexpr double const module_constants::z_;

constexpr double const module_constants::zeroDoubleValue_;

constexpr double const module_constants::longDoubleValue_;

constexpr ::cpp2::MyCompany const module_constants::my_company_;

constexpr char const * const module_constants::foo_;

constexpr ::cpp2::MyIntIdentifier const module_constants::bar_;

::cpp2::MyMapIdentifier const& module_constants::mymap() {
  static folly::Indestructible<::cpp2::MyMapIdentifier> const instance{std::initializer_list<std::pair<const ::std::string, ::std::string>>{{apache::thrift::StringTraits<std::string>::fromStringLiteral("keys"), apache::thrift::StringTraits<std::string>::fromStringLiteral("values")}}};
  return *instance;
}

::cpp2::Internship const& module_constants::instagram() {
  static folly::Indestructible<::cpp2::Internship> const instance{::apache::thrift::detail::make_structured_constant<::cpp2::Internship>(::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::weeks>(static_cast<::std::int32_t>(12)), ::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::title>(apache::thrift::StringTraits<std::string>::fromStringLiteral("Software Engineer")), ::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::employer>( ::cpp2::Company::INSTAGRAM), ::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::compensation>(static_cast<double>(1200)), ::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::school>(apache::thrift::StringTraits<std::string>::fromStringLiteral("Monters University")))};
  return *instance;
}

::cpp2::Internship const& module_constants::partial_const() {
  static folly::Indestructible<::cpp2::Internship> const instance{::apache::thrift::detail::make_structured_constant<::cpp2::Internship>(::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::weeks>(static_cast<::std::int32_t>(8)), ::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::title>(apache::thrift::StringTraits<std::string>::fromStringLiteral("Some Job")))};
  return *instance;
}

::std::vector<::cpp2::Range> const& module_constants::kRanges() {
  static folly::Indestructible<::std::vector<::cpp2::Range>> const instance{std::initializer_list<::cpp2::Range>{::apache::thrift::detail::make_structured_constant<::cpp2::Range>(::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::min>(static_cast<::std::int32_t>(1)), ::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::max>(static_cast<::std::int32_t>(2))),
  ::apache::thrift::detail::make_structured_constant<::cpp2::Range>(::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::min>(static_cast<::std::int32_t>(5)), ::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::max>(static_cast<::std::int32_t>(6)))}};
  return *instance;
}

::std::vector<::cpp2::Internship> const& module_constants::internList() {
  static folly::Indestructible<::std::vector<::cpp2::Internship>> const instance{std::initializer_list<::cpp2::Internship>{::cpp2::module_constants::instagram(),
  ::apache::thrift::detail::make_structured_constant<::cpp2::Internship>(::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::weeks>(static_cast<::std::int32_t>(10)), ::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::title>(apache::thrift::StringTraits<std::string>::fromStringLiteral("Sales Intern")), ::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::employer>( ::cpp2::Company::FACEBOOK), ::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::compensation>(static_cast<double>(1000)))}};
  return *instance;
}

::cpp2::struct1 const& module_constants::pod_0() {
  static folly::Indestructible<::cpp2::struct1> const instance{::apache::thrift::detail::make_structured_constant<::cpp2::struct1>()};
  return *instance;
}

::cpp2::struct1 const& module_constants::pod_s_0() {
  static folly::Indestructible<::cpp2::struct1> const instance{::apache::thrift::detail::make_structured_constant<::cpp2::struct1>()};
  return *instance;
}

::cpp2::struct1 const& module_constants::pod_1() {
  static folly::Indestructible<::cpp2::struct1> const instance{::apache::thrift::detail::make_structured_constant<::cpp2::struct1>(::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::a>(static_cast<::std::int32_t>(10)), ::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::b>(apache::thrift::StringTraits<std::string>::fromStringLiteral("foo")))};
  return *instance;
}

::cpp2::struct1 const& module_constants::pod_s_1() {
  static folly::Indestructible<::cpp2::struct1> const instance{::apache::thrift::detail::make_structured_constant<::cpp2::struct1>(::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::a>(static_cast<::std::int32_t>(10)), ::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::b>(apache::thrift::StringTraits<std::string>::fromStringLiteral("foo")))};
  return *instance;
}

::cpp2::struct2 const& module_constants::pod_2() {
  static folly::Indestructible<::cpp2::struct2> const instance{::apache::thrift::detail::make_structured_constant<::cpp2::struct2>(::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::a>(static_cast<::std::int32_t>(98)), ::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::b>(apache::thrift::StringTraits<std::string>::fromStringLiteral("gaz")), ::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::c>(::apache::thrift::detail::make_structured_constant<::cpp2::struct1>(::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::a>(static_cast<::std::int32_t>(12)), ::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::b>(apache::thrift::StringTraits<std::string>::fromStringLiteral("bar")))), ::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::d>(std::initializer_list<::std::int32_t>{static_cast<::std::int32_t>(11),
  static_cast<::std::int32_t>(22),
  static_cast<::std::int32_t>(33)}))};
  return *instance;
}

::cpp2::struct2 const& module_constants::pod_trailing_commas() {
  static folly::Indestructible<::cpp2::struct2> const instance{::apache::thrift::detail::make_structured_constant<::cpp2::struct2>(::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::a>(static_cast<::std::int32_t>(98)), ::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::b>(apache::thrift::StringTraits<std::string>::fromStringLiteral("gaz")), ::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::c>(::apache::thrift::detail::make_structured_constant<::cpp2::struct1>(::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::a>(static_cast<::std::int32_t>(12)), ::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::b>(apache::thrift::StringTraits<std::string>::fromStringLiteral("bar")))), ::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::d>(std::initializer_list<::std::int32_t>{static_cast<::std::int32_t>(11),
  static_cast<::std::int32_t>(22),
  static_cast<::std::int32_t>(33)}))};
  return *instance;
}

::cpp2::struct2 const& module_constants::pod_s_2() {
  static folly::Indestructible<::cpp2::struct2> const instance{::apache::thrift::detail::make_structured_constant<::cpp2::struct2>(::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::a>(static_cast<::std::int32_t>(98)), ::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::b>(apache::thrift::StringTraits<std::string>::fromStringLiteral("gaz")), ::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::c>(::apache::thrift::detail::make_structured_constant<::cpp2::struct1>(::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::a>(static_cast<::std::int32_t>(12)), ::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::b>(apache::thrift::StringTraits<std::string>::fromStringLiteral("bar")))), ::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::d>(std::initializer_list<::std::int32_t>{static_cast<::std::int32_t>(11),
  static_cast<::std::int32_t>(22),
  static_cast<::std::int32_t>(33)}))};
  return *instance;
}

::cpp2::struct3 const& module_constants::pod_3() {
  static folly::Indestructible<::cpp2::struct3> const instance{::apache::thrift::detail::make_structured_constant<::cpp2::struct3>(::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::a>(apache::thrift::StringTraits<std::string>::fromStringLiteral("abc")), ::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::b>(static_cast<::std::int32_t>(456)), ::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::c>(::apache::thrift::detail::make_structured_constant<::cpp2::struct2>(::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::a>(static_cast<::std::int32_t>(888)), ::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::c>(::apache::thrift::detail::make_structured_constant<::cpp2::struct1>(::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::b>(apache::thrift::StringTraits<std::string>::fromStringLiteral("gaz")))), ::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::d>(std::initializer_list<::std::int32_t>{static_cast<::std::int32_t>(1),
  static_cast<::std::int32_t>(2),
  static_cast<::std::int32_t>(3)}))))};
  return *instance;
}

::cpp2::struct3 const& module_constants::pod_s_3() {
  static folly::Indestructible<::cpp2::struct3> const instance{::apache::thrift::detail::make_structured_constant<::cpp2::struct3>(::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::a>(apache::thrift::StringTraits<std::string>::fromStringLiteral("abc")), ::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::b>(static_cast<::std::int32_t>(456)), ::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::c>(::apache::thrift::detail::make_structured_constant<::cpp2::struct2>(::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::a>(static_cast<::std::int32_t>(888)), ::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::c>(::apache::thrift::detail::make_structured_constant<::cpp2::struct1>(::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::b>(apache::thrift::StringTraits<std::string>::fromStringLiteral("gaz")))), ::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::d>(std::initializer_list<::std::int32_t>{static_cast<::std::int32_t>(1),
  static_cast<::std::int32_t>(2),
  static_cast<::std::int32_t>(3)}))))};
  return *instance;
}

::cpp2::struct4 const& module_constants::pod_4() {
  static folly::Indestructible<::cpp2::struct4> const instance{::apache::thrift::detail::make_structured_constant<::cpp2::struct4>(::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::a>(static_cast<::std::int32_t>(1234)), ::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::b>(static_cast<double>(0.333)), ::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::c>(static_cast<::std::int8_t>(25)))};
  return *instance;
}

::cpp2::union1 const& module_constants::u_1_1() {
  static folly::Indestructible<::cpp2::union1> const instance{::apache::thrift::detail::make_structured_constant<::cpp2::union1>(::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::i>(static_cast<::std::int32_t>(97)))};
  return *instance;
}

::cpp2::union1 const& module_constants::u_1_2() {
  static folly::Indestructible<::cpp2::union1> const instance{::apache::thrift::detail::make_structured_constant<::cpp2::union1>(::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::d>(static_cast<double>(5.6)))};
  return *instance;
}

::cpp2::union1 const& module_constants::u_1_3() {
  static folly::Indestructible<::cpp2::union1> const instance{::apache::thrift::detail::make_structured_constant<::cpp2::union1>()};
  return *instance;
}

::cpp2::union2 const& module_constants::u_2_1() {
  static folly::Indestructible<::cpp2::union2> const instance{::apache::thrift::detail::make_structured_constant<::cpp2::union2>(::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::i>(static_cast<::std::int32_t>(51)))};
  return *instance;
}

::cpp2::union2 const& module_constants::u_2_2() {
  static folly::Indestructible<::cpp2::union2> const instance{::apache::thrift::detail::make_structured_constant<::cpp2::union2>(::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::d>(static_cast<double>(6.7)))};
  return *instance;
}

::cpp2::union2 const& module_constants::u_2_3() {
  static folly::Indestructible<::cpp2::union2> const instance{::apache::thrift::detail::make_structured_constant<::cpp2::union2>(::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::s>(::apache::thrift::detail::make_structured_constant<::cpp2::struct1>(::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::a>(static_cast<::std::int32_t>(8)), ::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::b>(apache::thrift::StringTraits<std::string>::fromStringLiteral("abacabb")))))};
  return *instance;
}

::cpp2::union2 const& module_constants::u_2_4() {
  static folly::Indestructible<::cpp2::union2> const instance{::apache::thrift::detail::make_structured_constant<::cpp2::union2>(::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::u>(::apache::thrift::detail::make_structured_constant<::cpp2::union1>(::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::i>(static_cast<::std::int32_t>(43)))))};
  return *instance;
}

::cpp2::union2 const& module_constants::u_2_5() {
  static folly::Indestructible<::cpp2::union2> const instance{::apache::thrift::detail::make_structured_constant<::cpp2::union2>(::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::u>(::apache::thrift::detail::make_structured_constant<::cpp2::union1>(::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::d>(static_cast<double>(9.8)))))};
  return *instance;
}

::cpp2::union2 const& module_constants::u_2_6() {
  static folly::Indestructible<::cpp2::union2> const instance{::apache::thrift::detail::make_structured_constant<::cpp2::union2>(::apache::thrift::detail::wrap_struct_argument<::apache::thrift::ident::u>(::apache::thrift::detail::make_structured_constant<::cpp2::union1>()))};
  return *instance;
}

constexpr char const * const module_constants::apostrophe_;

constexpr char const * const module_constants::tripleApostrophe_;

constexpr char const * const module_constants::quotationMark_;

constexpr char const * const module_constants::backslash_;

constexpr char const * const module_constants::escaped_a_;

::std::map<::std::string, ::std::int32_t> const& module_constants::char2ascii() {
  static folly::Indestructible<::std::map<::std::string, ::std::int32_t>> const instance{std::initializer_list<std::pair<const ::std::string, ::std::int32_t>>{{apache::thrift::StringTraits<std::string>::fromStringLiteral("'"), static_cast<::std::int32_t>(39)},
  {apache::thrift::StringTraits<std::string>::fromStringLiteral("\""), static_cast<::std::int32_t>(34)},
  {apache::thrift::StringTraits<std::string>::fromStringLiteral("\\"), static_cast<::std::int32_t>(92)},
  {apache::thrift::StringTraits<std::string>::fromStringLiteral("a"), static_cast<::std::int32_t>(97)}}};
  return *instance;
}

::std::vector<::std::string> const& module_constants::escaped_strings() {
  static folly::Indestructible<::std::vector<::std::string>> const instance{std::initializer_list<::std::string>{apache::thrift::StringTraits<std::string>::fromStringLiteral(""),
  apache::thrift::StringTraits<std::string>::fromStringLiteral(""),
  apache::thrift::StringTraits<std::string>::fromStringLiteral(" "),
  apache::thrift::StringTraits<std::string>::fromStringLiteral("'"),
  apache::thrift::StringTraits<std::string>::fromStringLiteral("\""),
  apache::thrift::StringTraits<std::string>::fromStringLiteral("\n"),
  apache::thrift::StringTraits<std::string>::fromStringLiteral("\r"),
  apache::thrift::StringTraits<std::string>::fromStringLiteral("	"),
  apache::thrift::StringTraits<std::string>::fromStringLiteral("a"),
  apache::thrift::StringTraits<std::string>::fromStringLiteral("\302\253"),
  apache::thrift::StringTraits<std::string>::fromStringLiteral("j"),
  apache::thrift::StringTraits<std::string>::fromStringLiteral("\302\246"),
  apache::thrift::StringTraits<std::string>::fromStringLiteral("ayyy"),
  apache::thrift::StringTraits<std::string>::fromStringLiteral("\302\253yyy"),
  apache::thrift::StringTraits<std::string>::fromStringLiteral("jyyy"),
  apache::thrift::StringTraits<std::string>::fromStringLiteral("\302\246yyy"),
  apache::thrift::StringTraits<std::string>::fromStringLiteral("zzza"),
  apache::thrift::StringTraits<std::string>::fromStringLiteral("zzz\302\253"),
  apache::thrift::StringTraits<std::string>::fromStringLiteral("zzzj"),
  apache::thrift::StringTraits<std::string>::fromStringLiteral("zzz\302\246"),
  apache::thrift::StringTraits<std::string>::fromStringLiteral("zzzayyy"),
  apache::thrift::StringTraits<std::string>::fromStringLiteral("zzz\302\253yyy"),
  apache::thrift::StringTraits<std::string>::fromStringLiteral("zzzjyyy"),
  apache::thrift::StringTraits<std::string>::fromStringLiteral("zzz\302\246yyy")}};
  return *instance;
}

constexpr bool const module_constants::false_c_;

constexpr bool const module_constants::true_c_;

constexpr ::std::int8_t const module_constants::zero_byte_;

constexpr ::std::int16_t const module_constants::zero16_;

constexpr ::std::int32_t const module_constants::zero32_;

constexpr ::std::int64_t const module_constants::zero64_;

constexpr double const module_constants::zero_dot_zero_;

constexpr char const * const module_constants::empty_string_;

::std::vector<::std::int32_t> const& module_constants::empty_int_list() {
  static folly::Indestructible<::std::vector<::std::int32_t>> const instance{std::initializer_list<::std::int32_t>{}};
  return *instance;
}

::std::vector<::std::string> const& module_constants::empty_string_list() {
  static folly::Indestructible<::std::vector<::std::string>> const instance{std::initializer_list<::std::string>{}};
  return *instance;
}

::std::set<::std::int32_t> const& module_constants::empty_int_set() {
  static folly::Indestructible<::std::set<::std::int32_t>> const instance{std::initializer_list<::std::int32_t>{}};
  return *instance;
}

::std::set<::std::string> const& module_constants::empty_string_set() {
  static folly::Indestructible<::std::set<::std::string>> const instance{std::initializer_list<::std::string>{}};
  return *instance;
}

::std::map<::std::int32_t, ::std::int32_t> const& module_constants::empty_int_int_map() {
  static folly::Indestructible<::std::map<::std::int32_t, ::std::int32_t>> const instance{std::initializer_list<std::pair<const ::std::int32_t, ::std::int32_t>>{}};
  return *instance;
}

::std::map<::std::int32_t, ::std::string> const& module_constants::empty_int_string_map() {
  static folly::Indestructible<::std::map<::std::int32_t, ::std::string>> const instance{std::initializer_list<std::pair<const ::std::int32_t, ::std::string>>{}};
  return *instance;
}

::std::map<::std::string, ::std::int32_t> const& module_constants::empty_string_int_map() {
  static folly::Indestructible<::std::map<::std::string, ::std::int32_t>> const instance{std::initializer_list<std::pair<const ::std::string, ::std::int32_t>>{}};
  return *instance;
}

::std::map<::std::string, ::std::string> const& module_constants::empty_string_string_map() {
  static folly::Indestructible<::std::map<::std::string, ::std::string>> const instance{std::initializer_list<std::pair<const ::std::string, ::std::string>>{}};
  return *instance;
}

constexpr ::std::int64_t const module_constants::maxIntDec_;

constexpr ::std::int64_t const module_constants::maxIntOct_;

constexpr ::std::int64_t const module_constants::maxIntHex_;

constexpr ::std::int64_t const module_constants::maxIntBin_;

constexpr double const module_constants::maxDub_;

constexpr double const module_constants::minDub_;

constexpr double const module_constants::minSDub_;

constexpr ::std::int64_t const module_constants::maxPIntDec_;

constexpr ::std::int64_t const module_constants::maxPIntOct_;

constexpr ::std::int64_t const module_constants::maxPIntHex_;

constexpr ::std::int64_t const module_constants::maxPIntBin_;

constexpr double const module_constants::maxPDub_;

constexpr double const module_constants::minPDub_;

constexpr double const module_constants::minPSDub_;

constexpr ::std::int64_t const module_constants::minIntDec_;

constexpr ::std::int64_t const module_constants::minIntOct_;

constexpr ::std::int64_t const module_constants::minIntHex_;

constexpr ::std::int64_t const module_constants::minIntBin_;

constexpr double const module_constants::maxNDub_;

constexpr double const module_constants::minNDub_;

constexpr double const module_constants::minNSDub_;

} // cpp2
