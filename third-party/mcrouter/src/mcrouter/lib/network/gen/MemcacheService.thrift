/*
 *  Copyright (c) Meta Platforms, Inc. and affiliates.
 *
 *  This source code is licensed under the MIT license found in the LICENSE
 *  file in the root directory of this source tree.
 *
 */

/*
 *  THIS FILE IS AUTOGENERATED. DO NOT MODIFY IT; ALL CHANGES WILL BE LOST IN
 *  VAIN.
 *
 *  @generated
 */
include "thrift/annotation/cpp.thrift"
include "mcrouter/lib/network/gen/Common.thrift"
include "mcrouter/lib/network/gen/Memcache.thrift"

cpp_include "mcrouter/lib/network/gen/MemcacheMessages.h"

namespace cpp2 facebook.memcache.thrift
namespace py3 facebook.memcache.thrift

service Memcache {
  Memcache_McAddReply mcAdd(1: Memcache_McAddRequest request) throws (1: Common.CarbonResultBusy carbonResultBusy, 2: Common.CarbonResultRemoteError carbonResultRemoteError) (thread = "eb")
  Memcache_McAppendReply mcAppend(1: Memcache_McAppendRequest request) throws (1: Common.CarbonResultBusy carbonResultBusy, 2: Common.CarbonResultRemoteError carbonResultRemoteError) (thread = "eb")
  Memcache_McCasReply mcCas(1: Memcache_McCasRequest request) throws (1: Common.CarbonResultBusy carbonResultBusy, 2: Common.CarbonResultRemoteError carbonResultRemoteError) (thread = "eb")
  Memcache_McDecrReply mcDecr(1: Memcache_McDecrRequest request) throws (1: Common.CarbonResultBusy carbonResultBusy, 2: Common.CarbonResultRemoteError carbonResultRemoteError) (thread = "eb")
  Memcache_McDeleteReply mcDelete(1: Memcache_McDeleteRequest request) throws (1: Common.CarbonResultBusy carbonResultBusy, 2: Common.CarbonResultRemoteError carbonResultRemoteError) (thread = "eb")
  Memcache_McFlushAllReply mcFlushAll(1: Memcache_McFlushAllRequest request) throws (1: Common.CarbonResultBusy carbonResultBusy, 2: Common.CarbonResultRemoteError carbonResultRemoteError) (thread = "eb")
  Memcache_McFlushReReply mcFlushRe(1: Memcache_McFlushReRequest request) throws (1: Common.CarbonResultBusy carbonResultBusy, 2: Common.CarbonResultRemoteError carbonResultRemoteError) (thread = "eb")
  Memcache_McGatReply mcGat(1: Memcache_McGatRequest request) throws (1: Common.CarbonResultBusy carbonResultBusy, 2: Common.CarbonResultRemoteError carbonResultRemoteError) (thread = "eb")
  Memcache_McGatsReply mcGats(1: Memcache_McGatsRequest request) throws (1: Common.CarbonResultBusy carbonResultBusy, 2: Common.CarbonResultRemoteError carbonResultRemoteError) (thread = "eb")
  Memcache_McGetReply mcGet(1: Memcache_McGetRequest request) throws (1: Common.CarbonResultBusy carbonResultBusy, 2: Common.CarbonResultRemoteError carbonResultRemoteError) (thread = "eb")
  Memcache_McGetsReply mcGets(1: Memcache_McGetsRequest request) throws (1: Common.CarbonResultBusy carbonResultBusy, 2: Common.CarbonResultRemoteError carbonResultRemoteError) (thread = "eb")
  Memcache_McIncrReply mcIncr(1: Memcache_McIncrRequest request) throws (1: Common.CarbonResultBusy carbonResultBusy, 2: Common.CarbonResultRemoteError carbonResultRemoteError) (thread = "eb")
  Memcache_McLeaseGetReply mcLeaseGet(1: Memcache_McLeaseGetRequest request) throws (1: Common.CarbonResultBusy carbonResultBusy, 2: Common.CarbonResultRemoteError carbonResultRemoteError) (thread = "eb")
  Memcache_McLeaseSetReply mcLeaseSet(1: Memcache_McLeaseSetRequest request) throws (1: Common.CarbonResultBusy carbonResultBusy, 2: Common.CarbonResultRemoteError carbonResultRemoteError) (thread = "eb")
  Memcache_McMetagetReply mcMetaget(1: Memcache_McMetagetRequest request) throws (1: Common.CarbonResultBusy carbonResultBusy, 2: Common.CarbonResultRemoteError carbonResultRemoteError) (thread = "eb")
  Memcache_McPrependReply mcPrepend(1: Memcache_McPrependRequest request) throws (1: Common.CarbonResultBusy carbonResultBusy, 2: Common.CarbonResultRemoteError carbonResultRemoteError) (thread = "eb")
  Memcache_McReplaceReply mcReplace(1: Memcache_McReplaceRequest request) throws (1: Common.CarbonResultBusy carbonResultBusy, 2: Common.CarbonResultRemoteError carbonResultRemoteError) (thread = "eb")
  Memcache_McSetReply mcSet(1: Memcache_McSetRequest request) throws (1: Common.CarbonResultBusy carbonResultBusy, 2: Common.CarbonResultRemoteError carbonResultRemoteError) (thread = "eb")
  Memcache_McTouchReply mcTouch(1: Memcache_McTouchRequest request) throws (1: Common.CarbonResultBusy carbonResultBusy, 2: Common.CarbonResultRemoteError carbonResultRemoteError) (thread = "eb")
  Common_McVersionReply mcVersion(1: Common_McVersionRequest request) (thread = "eb")
}

@cpp.Type{name = "facebook::memcache::McAddReply"}
typedef Memcache.McAddReply Memcache_McAddReply
@cpp.Type{name = "facebook::memcache::McAddRequest"}
typedef Memcache.McAddRequest Memcache_McAddRequest
@cpp.Type{name = "facebook::memcache::McAppendReply"}
typedef Memcache.McAppendReply Memcache_McAppendReply
@cpp.Type{name = "facebook::memcache::McAppendRequest"}
typedef Memcache.McAppendRequest Memcache_McAppendRequest
@cpp.Type{name = "facebook::memcache::McCasReply"}
typedef Memcache.McCasReply Memcache_McCasReply
@cpp.Type{name = "facebook::memcache::McCasRequest"}
typedef Memcache.McCasRequest Memcache_McCasRequest
@cpp.Type{name = "facebook::memcache::McDecrReply"}
typedef Memcache.McDecrReply Memcache_McDecrReply
@cpp.Type{name = "facebook::memcache::McDecrRequest"}
typedef Memcache.McDecrRequest Memcache_McDecrRequest
@cpp.Type{name = "facebook::memcache::McDeleteReply"}
typedef Memcache.McDeleteReply Memcache_McDeleteReply
@cpp.Type{name = "facebook::memcache::McDeleteRequest"}
typedef Memcache.McDeleteRequest Memcache_McDeleteRequest
@cpp.Type{name = "facebook::memcache::McFlushAllReply"}
typedef Memcache.McFlushAllReply Memcache_McFlushAllReply
@cpp.Type{name = "facebook::memcache::McFlushAllRequest"}
typedef Memcache.McFlushAllRequest Memcache_McFlushAllRequest
@cpp.Type{name = "facebook::memcache::McFlushReReply"}
typedef Memcache.McFlushReReply Memcache_McFlushReReply
@cpp.Type{name = "facebook::memcache::McFlushReRequest"}
typedef Memcache.McFlushReRequest Memcache_McFlushReRequest
@cpp.Type{name = "facebook::memcache::McGatReply"}
typedef Memcache.McGatReply Memcache_McGatReply
@cpp.Type{name = "facebook::memcache::McGatRequest"}
typedef Memcache.McGatRequest Memcache_McGatRequest
@cpp.Type{name = "facebook::memcache::McGatsReply"}
typedef Memcache.McGatsReply Memcache_McGatsReply
@cpp.Type{name = "facebook::memcache::McGatsRequest"}
typedef Memcache.McGatsRequest Memcache_McGatsRequest
@cpp.Type{name = "facebook::memcache::McGetReply"}
typedef Memcache.McGetReply Memcache_McGetReply
@cpp.Type{name = "facebook::memcache::McGetRequest"}
typedef Memcache.McGetRequest Memcache_McGetRequest
@cpp.Type{name = "facebook::memcache::McGetsReply"}
typedef Memcache.McGetsReply Memcache_McGetsReply
@cpp.Type{name = "facebook::memcache::McGetsRequest"}
typedef Memcache.McGetsRequest Memcache_McGetsRequest
@cpp.Type{name = "facebook::memcache::McIncrReply"}
typedef Memcache.McIncrReply Memcache_McIncrReply
@cpp.Type{name = "facebook::memcache::McIncrRequest"}
typedef Memcache.McIncrRequest Memcache_McIncrRequest
@cpp.Type{name = "facebook::memcache::McLeaseGetReply"}
typedef Memcache.McLeaseGetReply Memcache_McLeaseGetReply
@cpp.Type{name = "facebook::memcache::McLeaseGetRequest"}
typedef Memcache.McLeaseGetRequest Memcache_McLeaseGetRequest
@cpp.Type{name = "facebook::memcache::McLeaseSetReply"}
typedef Memcache.McLeaseSetReply Memcache_McLeaseSetReply
@cpp.Type{name = "facebook::memcache::McLeaseSetRequest"}
typedef Memcache.McLeaseSetRequest Memcache_McLeaseSetRequest
@cpp.Type{name = "facebook::memcache::McMetagetReply"}
typedef Memcache.McMetagetReply Memcache_McMetagetReply
@cpp.Type{name = "facebook::memcache::McMetagetRequest"}
typedef Memcache.McMetagetRequest Memcache_McMetagetRequest
@cpp.Type{name = "facebook::memcache::McPrependReply"}
typedef Memcache.McPrependReply Memcache_McPrependReply
@cpp.Type{name = "facebook::memcache::McPrependRequest"}
typedef Memcache.McPrependRequest Memcache_McPrependRequest
@cpp.Type{name = "facebook::memcache::McReplaceReply"}
typedef Memcache.McReplaceReply Memcache_McReplaceReply
@cpp.Type{name = "facebook::memcache::McReplaceRequest"}
typedef Memcache.McReplaceRequest Memcache_McReplaceRequest
@cpp.Type{name = "facebook::memcache::McSetReply"}
typedef Memcache.McSetReply Memcache_McSetReply
@cpp.Type{name = "facebook::memcache::McSetRequest"}
typedef Memcache.McSetRequest Memcache_McSetRequest
@cpp.Type{name = "facebook::memcache::McTouchReply"}
typedef Memcache.McTouchReply Memcache_McTouchReply
@cpp.Type{name = "facebook::memcache::McTouchRequest"}
typedef Memcache.McTouchRequest Memcache_McTouchRequest
@cpp.Type{name = "facebook::memcache::McVersionReply"}
typedef Common.McVersionReply Common_McVersionReply
@cpp.Type{name = "facebook::memcache::McVersionRequest"}
typedef Common.McVersionRequest Common_McVersionRequest