/*
   +----------------------------------------------------------------------+
   | HipHop for PHP                                                       |
   +----------------------------------------------------------------------+
   | Copyright (c) 2010-present Facebook, Inc. (http://www.facebook.com)  |
   | Copyright (c) 1998-2010 Zend Technologies Ltd. (http://www.zend.com) |
   +----------------------------------------------------------------------+
   | This source file is subject to version 2.00 of the Zend license,     |
   | that is bundled with this package in the file LICENSE, and is        |
   | available through the world-wide-web at the following url:           |
   | http://www.zend.com/license/2_00.txt.                                |
   | If you did not receive a copy of the Zend license and are unable to  |
   | obtain it through the world-wide-web, please send a note to          |
   | license@zend.com so we can mail you a copy immediately.              |
   +----------------------------------------------------------------------+
*/

#pragma once

#include <cstdint>

#include "hphp/runtime/base/datatype.h"

namespace HPHP {
///////////////////////////////////////////////////////////////////////////////
// zend logic: These are not string utilities, but zend's special language
// semantics.

/**
 * Testing whether a string is numeric or not.
 */
DataType is_numeric_string(const char* str, int length, int64_t* lval,
                           double* dval, int allow_errors = 0,
                           int* overflow_info = nullptr);

///////////////////////////////////////////////////////////////////////////////
}

