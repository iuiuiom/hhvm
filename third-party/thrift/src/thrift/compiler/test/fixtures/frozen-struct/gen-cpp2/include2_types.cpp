/**
 * Autogenerated by Thrift for thrift/compiler/test/fixtures/frozen-struct/src/include2.thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated @nocommit
 */
#include "thrift/compiler/test/fixtures/frozen-struct/gen-cpp2/include2_types.h"
#include "thrift/compiler/test/fixtures/frozen-struct/gen-cpp2/include2_types.tcc"

#include <thrift/lib/cpp2/gen/module_types_cpp.h>

#include "thrift/compiler/test/fixtures/frozen-struct/gen-cpp2/include2_data.h"


namespace apache {
namespace thrift {
namespace detail {

void TccStructTraits<::some::ns::IncludedB>::translateFieldName(
    folly::StringPiece _fname,
    int16_t& fid,
    apache::thrift::protocol::TType& _ftype) noexcept {
  using data = apache::thrift::TStructDataStorage<::some::ns::IncludedB>;
  static const st::translate_field_name_table table{
      data::fields_size,
      data::fields_names.data(),
      data::fields_ids.data(),
      data::fields_types.data()};
  st::translate_field_name(_fname, fid, _ftype, table);
}

} // namespace detail
} // namespace thrift
} // namespace apache

namespace some { namespace ns {

const folly::StringPiece IncludedB::__fbthrift_get_field_name(::apache::thrift::FieldOrdinal ord) {
  if (ord == ::apache::thrift::FieldOrdinal{0}) { return {}; }
  return apache::thrift::TStructDataStorage<IncludedB>::fields_names[folly::to_underlying(ord) - 1];
}
const folly::StringPiece IncludedB::__fbthrift_get_class_name() {
  return apache::thrift::TStructDataStorage<IncludedB>::name;
}

IncludedB::IncludedB(const IncludedB&) = default;
IncludedB& IncludedB::operator=(const IncludedB&) = default;
IncludedB::IncludedB() :
      __fbthrift_field_i32Field() {
}


IncludedB::~IncludedB() {}

IncludedB::IncludedB(FOLLY_MAYBE_UNUSED IncludedB&& other) noexcept :
    __fbthrift_field_i32Field(std::move(other.__fbthrift_field_i32Field)),
    __fbthrift_field_strField(std::move(other.__fbthrift_field_strField)),
    __isset(other.__isset) {
}

IncludedB& IncludedB::operator=(FOLLY_MAYBE_UNUSED IncludedB&& other) noexcept {
    this->__fbthrift_field_i32Field = std::move(other.__fbthrift_field_i32Field);
    this->__fbthrift_field_strField = std::move(other.__fbthrift_field_strField);
    __isset = other.__isset;
    return *this;
}


IncludedB::IncludedB(apache::thrift::FragileConstructor, ::std::int32_t i32Field__arg, ::std::string strField__arg) :
    __fbthrift_field_i32Field(std::move(i32Field__arg)),
    __fbthrift_field_strField(std::move(strField__arg)) {
  __isset.set(folly::index_constant<0>(), true);
  __isset.set(folly::index_constant<1>(), true);
}


void IncludedB::__fbthrift_clear() {
  // clear all fields
  this->__fbthrift_field_i32Field = ::std::int32_t();
  this->__fbthrift_field_strField = apache::thrift::StringTraits<std::string>::fromStringLiteral("");
  __isset = {};
}

void IncludedB::__fbthrift_clear_terse_fields() {
}

bool IncludedB::__fbthrift_is_empty() const {
  return false;
}

bool IncludedB::operator==(FOLLY_MAYBE_UNUSED const IncludedB& rhs) const {
  return ::apache::thrift::op::detail::StructEquality{}(*this, rhs);
}

bool IncludedB::operator<(FOLLY_MAYBE_UNUSED const IncludedB& rhs) const {
  return ::apache::thrift::op::detail::StructLessThan{}(*this, rhs);
}


void swap(FOLLY_MAYBE_UNUSED IncludedB& a, FOLLY_MAYBE_UNUSED IncludedB& b) {
  using ::std::swap;
  swap(a.__fbthrift_field_i32Field, b.__fbthrift_field_i32Field);
  swap(a.__fbthrift_field_strField, b.__fbthrift_field_strField);
  swap(a.__isset, b.__isset);
}

template void IncludedB::readNoXfer<>(apache::thrift::BinaryProtocolReader*);
template uint32_t IncludedB::write<>(apache::thrift::BinaryProtocolWriter*) const;
template uint32_t IncludedB::serializedSize<>(apache::thrift::BinaryProtocolWriter const*) const;
template uint32_t IncludedB::serializedSizeZC<>(apache::thrift::BinaryProtocolWriter const*) const;
template void IncludedB::readNoXfer<>(apache::thrift::CompactProtocolReader*);
template uint32_t IncludedB::write<>(apache::thrift::CompactProtocolWriter*) const;
template uint32_t IncludedB::serializedSize<>(apache::thrift::CompactProtocolWriter const*) const;
template uint32_t IncludedB::serializedSizeZC<>(apache::thrift::CompactProtocolWriter const*) const;


}} // some::ns

namespace some { namespace ns { namespace {
FOLLY_MAYBE_UNUSED FOLLY_ERASE void validateAdapters() {
}
}}} // some::ns
