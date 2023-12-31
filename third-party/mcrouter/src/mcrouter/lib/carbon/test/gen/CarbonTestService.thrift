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
include "mcrouter/lib/carbon/test/gen/CarbonTest.thrift"

include "common/fb303/if/fb303.thrift"

cpp_include "mcrouter/lib/carbon/test/gen/CarbonTestMessages.h"

namespace cpp2 carbon.test.thrift
namespace py3 carbon.test.thrift

service CarbonTest extends fb303.FacebookService {
  CarbonTest_TestReply test(1: CarbonTest_TestRequest request) (thread = "eb")
  CarbonTest_TestReplyStringKey testStringKey(1: CarbonTest_TestRequestStringKey request) (thread = "eb")
  Common_McVersionReply mcVersion(1: Common_McVersionRequest request) (thread = "eb")
}

@cpp.Type{name = "carbon::test::TestReply"}
typedef CarbonTest.TestReply CarbonTest_TestReply
@cpp.Type{name = "carbon::test::TestRequest"}
typedef CarbonTest.TestRequest CarbonTest_TestRequest
@cpp.Type{name = "carbon::test::TestReplyStringKey"}
typedef CarbonTest.TestReplyStringKey CarbonTest_TestReplyStringKey
@cpp.Type{name = "carbon::test::TestRequestStringKey"}
typedef CarbonTest.TestRequestStringKey CarbonTest_TestRequestStringKey
@cpp.Type{name = "facebook::memcache::McVersionReply"}
typedef Common.McVersionReply Common_McVersionReply
@cpp.Type{name = "facebook::memcache::McVersionRequest"}
typedef Common.McVersionRequest Common_McVersionRequest