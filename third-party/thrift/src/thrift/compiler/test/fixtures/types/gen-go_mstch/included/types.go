// @generated by Thrift for thrift/compiler/test/fixtures/types/src/included.thrift
// This file is probably not the place you want to edit!

package included // thrift/compiler/test/fixtures/types/src/included.thrift

import (
  "fmt"

  "github.com/facebook/fbthrift/thrift/lib/go/thrift"
)


// (needed to ensure safety because of naive import list construction)
var _ = fmt.Printf
var _ = thrift.ZERO


type SomeMap = map[int32]string

type SomeListOfTypeMap = []SomeMap