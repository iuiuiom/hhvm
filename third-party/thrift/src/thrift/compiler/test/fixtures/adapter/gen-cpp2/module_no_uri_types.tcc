/**
 * Autogenerated by Thrift for thrift/compiler/test/fixtures/adapter/src/module_no_uri.thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated @nocommit
 */
#pragma once

#include "thrift/compiler/test/fixtures/adapter/gen-cpp2/module_no_uri_types.h"

#include <thrift/lib/cpp2/gen/module_types_tcc.h>


namespace apache {
namespace thrift {
namespace detail {

template <>
struct TccStructTraits<::cpp2::RefUnion> {
  static void translateFieldName(
      folly::StringPiece _fname,
      int16_t& fid,
      apache::thrift::protocol::TType& _ftype) noexcept;
};

} // namespace detail
} // namespace thrift
} // namespace apache

namespace cpp2 {

template <class Protocol_>
void RefUnion::readNoXfer(Protocol_* iprot) {
  apache::thrift::detail::ProtocolReaderStructReadState<Protocol_> _readState;
  _readState.fieldId = 0;

  _readState.readStructBegin(iprot);

  _readState.readFieldBegin(iprot);
  if (_readState.atStop()) {
    apache::thrift::clear(*this);
  } else {
    if (iprot->kUsesFieldNames()) {
      _readState.template fillFieldTraitsFromName<apache::thrift::detail::TccStructTraits<RefUnion>>();
    }
    switch (_readState.fieldId) {
      case 1:
      {
        if (_readState.isCompatibleWithType(iprot, apache::thrift::protocol::T_STRING)) {
          this->set_field1();
          auto ptr = ::apache::thrift::detail::make_mutable_smart_ptr<::std::shared_ptr<::apache::thrift::adapt_detail::adapted_field_t<::my::Adapter1, 1, ::std::string, RefUnion>>>();
          constexpr bool hasInplaceToThrift = ::apache::thrift::adapt_detail::has_inplace_toThrift<::my::Adapter1, ::apache::thrift::adapt_detail::adapted_field_t<::my::Adapter1, 1, ::std::string, RefUnion>>::value;
          ::folly::if_constexpr<hasInplaceToThrift>(
            [&](auto& field) {
              ::apache::thrift::detail::pm::protocol_methods<::apache::thrift::type_class::string, ::std::string>::readWithContext(*iprot, ::my::Adapter1::toThrift(field), _readState);
            },
            [&](auto&) {})(*ptr);
          if (!hasInplaceToThrift) {
            ::std::string tvalue;
            ::apache::thrift::detail::pm::protocol_methods<::apache::thrift::type_class::string, ::std::string>::readWithContext(*iprot, tvalue, _readState);
            *ptr = ::apache::thrift::adapt_detail::fromThriftField<::my::Adapter1, 1>(::std::move(tvalue), *this);
          }
          value_.field1 = std::move(ptr);
          
        } else {
          _readState.skip(iprot);
        }
        break;
      }
      default:
      {
        _readState.skip(iprot);
        break;
      }
    }
    _readState.readFieldEnd(iprot);
    _readState.readFieldBegin(iprot);
    if (UNLIKELY(!_readState.atStop())) {
      using apache::thrift::protocol::TProtocolException;
      TProtocolException::throwUnionMissingStop();
    }
  }
  _readState.readStructEnd(iprot);
}
template <class Protocol_>
uint32_t RefUnion::serializedSize(Protocol_ const* prot_) const {
  uint32_t xfer = 0;
  xfer += prot_->serializedStructSize("RefUnion");
  switch(this->getType()) {
    case RefUnion::Type::field1:
    {
      xfer += prot_->serializedFieldSize("field1", apache::thrift::protocol::T_STRING, 1);
      if (value_.field1) {
        xfer += ::apache::thrift::adapt_detail::serializedSize<false, ::my::Adapter1>(*prot_, *value_.field1, [&] {return ::apache::thrift::detail::pm::protocol_methods<::apache::thrift::type_class::string, ::std::string>::serializedSize<false>(*prot_, ::my::Adapter1::toThrift(*value_.field1));});
      }
      break;
    }
    case RefUnion::Type::__EMPTY__:;
  }
  xfer += prot_->serializedSizeStop();
  return xfer;
}

template <class Protocol_>
uint32_t RefUnion::serializedSizeZC(Protocol_ const* prot_) const {
  uint32_t xfer = 0;
  xfer += prot_->serializedStructSize("RefUnion");
  switch(this->getType()) {
    case RefUnion::Type::field1:
    {
      xfer += prot_->serializedFieldSize("field1", apache::thrift::protocol::T_STRING, 1);
      if (value_.field1) {
        xfer += ::apache::thrift::adapt_detail::serializedSize<false, ::my::Adapter1>(*prot_, *value_.field1, [&] {return ::apache::thrift::detail::pm::protocol_methods<::apache::thrift::type_class::string, ::std::string>::serializedSize<false>(*prot_, ::my::Adapter1::toThrift(*value_.field1));});
      }
      break;
    }
    case RefUnion::Type::__EMPTY__:;
  }
  xfer += prot_->serializedSizeStop();
  return xfer;
}

template <class Protocol_>
uint32_t RefUnion::write(Protocol_* prot_) const {
  uint32_t xfer = 0;
  xfer += prot_->writeStructBegin("RefUnion");
  switch(this->getType()) {
    case RefUnion::Type::field1:
    {
      constexpr int16_t kPrevFieldId = 0;
      xfer += ::apache::thrift::detail::writeFieldBegin<apache::thrift::protocol::T_STRING, 1, kPrevFieldId>(*prot_, "field1", false);
      if (value_.field1) {
        xfer += ::apache::thrift::detail::pm::protocol_methods<::apache::thrift::type_class::string, ::std::string>::write(*prot_, ::my::Adapter1::toThrift(*value_.field1));
      }
      xfer += prot_->writeFieldEnd();
      break;
    }
    case RefUnion::Type::__EMPTY__:;
  }
  xfer += prot_->writeFieldStop();
  xfer += prot_->writeStructEnd();
  return xfer;
}

extern template void RefUnion::readNoXfer<>(apache::thrift::BinaryProtocolReader*);
extern template uint32_t RefUnion::write<>(apache::thrift::BinaryProtocolWriter*) const;
extern template uint32_t RefUnion::serializedSize<>(apache::thrift::BinaryProtocolWriter const*) const;
extern template uint32_t RefUnion::serializedSizeZC<>(apache::thrift::BinaryProtocolWriter const*) const;
extern template void RefUnion::readNoXfer<>(apache::thrift::CompactProtocolReader*);
extern template uint32_t RefUnion::write<>(apache::thrift::CompactProtocolWriter*) const;
extern template uint32_t RefUnion::serializedSize<>(apache::thrift::CompactProtocolWriter const*) const;
extern template uint32_t RefUnion::serializedSizeZC<>(apache::thrift::CompactProtocolWriter const*) const;


} // cpp2
