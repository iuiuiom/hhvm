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

#include <stdio.h>
#include "hphp/util/virtual-file-system.h"

using namespace HPHP;
///////////////////////////////////////////////////////////////////////////////

int main(int argc, char **argv) {
  if (argc != 2) {
    printf("vfs filename\n");
    return 0;
  }

  const char *name =  argv[1];

  // Need to pass in SourceRoot but it isn't used
  auto vfs = VirtualFileSystem(name, "/var/www/");
  vfs.dump();
  return 0;
}
