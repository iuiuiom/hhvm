/*
   +----------------------------------------------------------------------+
   | HipHop for PHP                                                       |
   +----------------------------------------------------------------------+
   | Copyright (c) 2010-present Facebook, Inc. (http://www.facebook.com)  |
   +----------------------------------------------------------------------+
   | This source file is subject to version 3.01 of the PHP license,      |
   | that is bundled with this package in the file LICENSE, and is        |
   | available through the world-wide-web at the following url:           |
   | http://www.php.net/license/3_01.txt                                  |
   | If you did not receive a copy of the PHP license and are unable to   |
   | obtain it through the world-wide-web, please send a note to          |
   | license@php.net so we can mail you a copy immediately.               |
   +----------------------------------------------------------------------+
*/

#pragma once

#include <bit>
#include <cstddef>
#include <cstdint>
#include <exception>
#include <type_traits>
#include <utility>

#include <folly/Likely.h>

#include "hphp/runtime/base/record-replay.h"
#include "hphp/runtime/base/req-hash-map.h"
#include "hphp/runtime/base/req-vector.h"
#include "hphp/runtime/base/type-array.h"
#include "hphp/runtime/base/type-object.h"
#include "hphp/runtime/base/type-string.h"
#include "hphp/runtime/base/type-variant.h"

namespace HPHP {

struct c_Awaitable;
struct c_ExternalThreadEventWaitHandle;

struct Recorder {
  static void onHasReceived(bool received);
  static void onProcessSleepEvents(std::int64_t now);
  static void onReceiveSomeUntil(c_ExternalThreadEventWaitHandle* received);
  static void onTryReceiveSome(c_ExternalThreadEventWaitHandle* received);
  void requestExit();
  void requestInit();
  static void setEntryPoint(const String& entryPoint);

  template<auto f>
  static auto wrapNativeFunc(const char* name) {
    using Wrapper = WrapNativeFunc<MethodToFunc<f>::value>;
    addNativeFuncName(Wrapper::id, name);
    return Wrapper::wrapper;
  }

 private:
  struct DebuggerHook;
  struct LoggerHook;
  struct StdoutHook;
  template<auto f> struct WrapNativeFunc;

  template<typename R, typename... A, R(*f)(A...)>
  struct WrapNativeFunc<f> {
    inline static const auto id{reinterpret_cast<std::uintptr_t>(f)};
    static R wrapper(A... args) {
      if (const auto recorder{get()}; UNLIKELY(recorder->m_enabled)) {
        return recorder->recordNativeCall(f, id, std::forward<A>(args)...);
      } else {
        return f(std::forward<A>(args)...);
      }
    }
  };

  static void addNativeFuncName(std::uintptr_t id, const char* name);
  static Recorder* get();
  static StdoutHook* getStdoutHook();
  void onNativeCallArg(const String& arg);
  void onNativeCallEntry(std::uintptr_t id);
  void onNativeCallExit();
  void onNativeCallReturn(const String& ret);
  void onNativeCallThrow(std::exception_ptr exc);
  void onNativeCallWaitHandle(c_Awaitable* wh);
  void resolveWaitHandles();
  template<typename T> static String serialize(T value);
  Array toArray() const;

  template<typename R, typename... A>
  R recordNativeCall(R(*f)(A...), std::uintptr_t id, A&&... args) {
    onNativeCallEntry(id);
    std::conditional_t<std::is_void_v<R>, std::nullptr_t, R> ret;
    std::exception_ptr exc;
    try {
      if constexpr (std::is_void_v<R>) {
        f(std::forward<A>(args)...);
      } else {
        ret = f(std::forward<A>(args)...);
      }
    } catch (...) {
      exc = std::current_exception();
    }
    (onNativeCallArg(serialize(std::forward<A>(args))), ...);
    if (exc) {
      onNativeCallThrow(exc);
      std::rethrow_exception(exc);
    } else {
      ObjectData* obj{nullptr};
      if constexpr (std::is_same_v<R, Object>) {
        obj = ret.get();
      } else if constexpr (std::is_same_v<R, Variant>) {
        if (ret.isObject()) {
          obj = ret.asCObjRef().get();
        }
      }
      if (obj != nullptr && obj->isWaitHandle()) {
        onNativeCallWaitHandle(std::bit_cast<c_Awaitable*>(obj));
      } else {
        onNativeCallReturn(serialize(ret));
      }
      if constexpr (!std::is_void_v<R>) {
        return ret;
      }
    }
  }

  req::vector<AsioEvent> m_asioEvents;
  bool m_enabled{false};
  req::vector<NativeCall> m_nativeCalls;
  std::size_t m_nextThreadCreationOrder;
  req::hash_map<c_Awaitable*, std::size_t> m_pendingWaitHandleToNativeCall;
  Array m_serverGlobal;
  req::hash_map<const c_ExternalThreadEventWaitHandle*, std::size_t> m_threads;
};

} // namespace HPHP
