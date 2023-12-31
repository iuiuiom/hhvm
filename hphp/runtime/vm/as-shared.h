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

#include <string>

#include "hphp/runtime/vm/as-base.h"
#include "hphp/runtime/vm/type-constraint.h"

namespace HPHP {

//////////////////////////////////////////////////////////////////////

/*
 * This header contains routines shared between as.cpp and disas.cpp.
 * It shouldn't be included by anything else.
 */

//////////////////////////////////////////////////////////////////////

/*
 * Convert a string containing a single type flag name into a
 * TypeConstraint::Flag.
 *
 * Returns std::nullopt if the string doesn't name a known attribute.
 */
Optional<TypeConstraintFlags> string_to_type_flag(const std::string& name);
//////////////////////////////////////////////////////////////////////
struct is_bareword {
  bool operator()(int i) const {
    return isalnum(i) || i == '_' || i == '.' || i == '$' || i == '\\';
  }
};

/*
 * Convert a string containing a single attribute name into an Attr,
 * for a given context.
 *
 * Returns std::nullopt if the string doesn't name a known attribute.
 */
Optional<Attr> string_to_attr(AttrContext, const std::string&);
}
