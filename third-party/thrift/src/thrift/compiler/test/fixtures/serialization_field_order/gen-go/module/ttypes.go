// Autogenerated by Thrift Compiler (facebook)
// DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
// @generated

package module

import (
	"bytes"
	"context"
	"sync"
	"fmt"
	thrift "github.com/facebook/fbthrift/thrift/lib/go/thrift"
)

// (needed to ensure safety because of naive import list construction.)
var _ = thrift.ZERO
var _ = fmt.Printf
var _ = sync.Mutex{}
var _ = bytes.Equal
var _ = context.Background

var GoUnusedProtection__ int;

// Attributes:
//  - Field1
//  - Field2
//  - Field3
type Foo struct {
  Field2 int32 `thrift:"field2,1" db:"field2" json:"field2"`
  Field3 int32 `thrift:"field3,2" db:"field3" json:"field3"`
  Field1 int32 `thrift:"field1,3" db:"field1" json:"field1"`
}

func NewFoo() *Foo {
  return &Foo{}
}


func (p *Foo) GetField1() int32 {
  return p.Field1
}

func (p *Foo) GetField2() int32 {
  return p.Field2
}

func (p *Foo) GetField3() int32 {
  return p.Field3
}
type FooBuilder struct {
  obj *Foo
}

func NewFooBuilder() *FooBuilder{
  return &FooBuilder{
    obj: NewFoo(),
  }
}

func (p FooBuilder) Emit() *Foo{
  return &Foo{
    Field1: p.obj.Field1,
    Field2: p.obj.Field2,
    Field3: p.obj.Field3,
  }
}

func (f *FooBuilder) Field1(field1 int32) *FooBuilder {
  f.obj.Field1 = field1
  return f
}

func (f *FooBuilder) Field2(field2 int32) *FooBuilder {
  f.obj.Field2 = field2
  return f
}

func (f *FooBuilder) Field3(field3 int32) *FooBuilder {
  f.obj.Field3 = field3
  return f
}

func (f *Foo) SetField1(field1 int32) *Foo {
  f.Field1 = field1
  return f
}

func (f *Foo) SetField2(field2 int32) *Foo {
  f.Field2 = field2
  return f
}

func (f *Foo) SetField3(field3 int32) *Foo {
  f.Field3 = field3
  return f
}

func (p *Foo) Read(iprot thrift.Protocol) error {
  if _, err := iprot.ReadStructBegin(); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T read error: ", p), err)
  }


  for {
    _, fieldTypeId, fieldId, err := iprot.ReadFieldBegin()
    if err != nil {
      return thrift.PrependError(fmt.Sprintf("%T field %d read error: ", p, fieldId), err)
    }
    if fieldTypeId == thrift.STOP { break; }
    switch fieldId {
    case 3:
      if err := p.ReadField3(iprot); err != nil {
        return err
      }
    case 1:
      if err := p.ReadField1(iprot); err != nil {
        return err
      }
    case 2:
      if err := p.ReadField2(iprot); err != nil {
        return err
      }
    default:
      if err := iprot.Skip(fieldTypeId); err != nil {
        return err
      }
    }
    if err := iprot.ReadFieldEnd(); err != nil {
      return err
    }
  }
  if err := iprot.ReadStructEnd(); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T read struct end error: ", p), err)
  }
  return nil
}

func (p *Foo)  ReadField3(iprot thrift.Protocol) error {
  if v, err := iprot.ReadI32(); err != nil {
    return thrift.PrependError("error reading field 3: ", err)
  } else {
    p.Field1 = v
  }
  return nil
}

func (p *Foo)  ReadField1(iprot thrift.Protocol) error {
  if v, err := iprot.ReadI32(); err != nil {
    return thrift.PrependError("error reading field 1: ", err)
  } else {
    p.Field2 = v
  }
  return nil
}

func (p *Foo)  ReadField2(iprot thrift.Protocol) error {
  if v, err := iprot.ReadI32(); err != nil {
    return thrift.PrependError("error reading field 2: ", err)
  } else {
    p.Field3 = v
  }
  return nil
}

func (p *Foo) Write(oprot thrift.Protocol) error {
  if err := oprot.WriteStructBegin("Foo"); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T write struct begin error: ", p), err) }
  if err := p.writeField1(oprot); err != nil { return err }
  if err := p.writeField2(oprot); err != nil { return err }
  if err := p.writeField3(oprot); err != nil { return err }
  if err := oprot.WriteFieldStop(); err != nil {
    return thrift.PrependError("write field stop error: ", err) }
  if err := oprot.WriteStructEnd(); err != nil {
    return thrift.PrependError("write struct stop error: ", err) }
  return nil
}

func (p *Foo) writeField1(oprot thrift.Protocol) (err error) {
  if err := oprot.WriteFieldBegin("field2", thrift.I32, 1); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T write field begin error 1:field2: ", p), err) }
  if err := oprot.WriteI32(int32(p.Field2)); err != nil {
  return thrift.PrependError(fmt.Sprintf("%T.field2 (1) field write error: ", p), err) }
  if err := oprot.WriteFieldEnd(); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T write field end error 1:field2: ", p), err) }
  return err
}

func (p *Foo) writeField2(oprot thrift.Protocol) (err error) {
  if err := oprot.WriteFieldBegin("field3", thrift.I32, 2); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T write field begin error 2:field3: ", p), err) }
  if err := oprot.WriteI32(int32(p.Field3)); err != nil {
  return thrift.PrependError(fmt.Sprintf("%T.field3 (2) field write error: ", p), err) }
  if err := oprot.WriteFieldEnd(); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T write field end error 2:field3: ", p), err) }
  return err
}

func (p *Foo) writeField3(oprot thrift.Protocol) (err error) {
  if err := oprot.WriteFieldBegin("field1", thrift.I32, 3); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T write field begin error 3:field1: ", p), err) }
  if err := oprot.WriteI32(int32(p.Field1)); err != nil {
  return thrift.PrependError(fmt.Sprintf("%T.field1 (3) field write error: ", p), err) }
  if err := oprot.WriteFieldEnd(); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T write field end error 3:field1: ", p), err) }
  return err
}

func (p *Foo) String() string {
  if p == nil {
    return "<nil>"
  }

  field2Val := fmt.Sprintf("%v", p.Field2)
  field3Val := fmt.Sprintf("%v", p.Field3)
  field1Val := fmt.Sprintf("%v", p.Field1)
  return fmt.Sprintf("Foo({Field2:%s Field3:%s Field1:%s})", field2Val, field3Val, field1Val)
}

// Attributes:
//  - Field1
//  - Field2
//  - Field3
type Foo2 struct {
  Field2 int32 `thrift:"field2,1" db:"field2" json:"field2"`
  Field3 int32 `thrift:"field3,2" db:"field3" json:"field3"`
  Field1 int32 `thrift:"field1,3" db:"field1" json:"field1"`
}

func NewFoo2() *Foo2 {
  return &Foo2{}
}


func (p *Foo2) GetField1() int32 {
  return p.Field1
}

func (p *Foo2) GetField2() int32 {
  return p.Field2
}

func (p *Foo2) GetField3() int32 {
  return p.Field3
}
type Foo2Builder struct {
  obj *Foo2
}

func NewFoo2Builder() *Foo2Builder{
  return &Foo2Builder{
    obj: NewFoo2(),
  }
}

func (p Foo2Builder) Emit() *Foo2{
  return &Foo2{
    Field1: p.obj.Field1,
    Field2: p.obj.Field2,
    Field3: p.obj.Field3,
  }
}

func (f *Foo2Builder) Field1(field1 int32) *Foo2Builder {
  f.obj.Field1 = field1
  return f
}

func (f *Foo2Builder) Field2(field2 int32) *Foo2Builder {
  f.obj.Field2 = field2
  return f
}

func (f *Foo2Builder) Field3(field3 int32) *Foo2Builder {
  f.obj.Field3 = field3
  return f
}

func (f *Foo2) SetField1(field1 int32) *Foo2 {
  f.Field1 = field1
  return f
}

func (f *Foo2) SetField2(field2 int32) *Foo2 {
  f.Field2 = field2
  return f
}

func (f *Foo2) SetField3(field3 int32) *Foo2 {
  f.Field3 = field3
  return f
}

func (p *Foo2) Read(iprot thrift.Protocol) error {
  if _, err := iprot.ReadStructBegin(); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T read error: ", p), err)
  }


  for {
    _, fieldTypeId, fieldId, err := iprot.ReadFieldBegin()
    if err != nil {
      return thrift.PrependError(fmt.Sprintf("%T field %d read error: ", p, fieldId), err)
    }
    if fieldTypeId == thrift.STOP { break; }
    switch fieldId {
    case 3:
      if err := p.ReadField3(iprot); err != nil {
        return err
      }
    case 1:
      if err := p.ReadField1(iprot); err != nil {
        return err
      }
    case 2:
      if err := p.ReadField2(iprot); err != nil {
        return err
      }
    default:
      if err := iprot.Skip(fieldTypeId); err != nil {
        return err
      }
    }
    if err := iprot.ReadFieldEnd(); err != nil {
      return err
    }
  }
  if err := iprot.ReadStructEnd(); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T read struct end error: ", p), err)
  }
  return nil
}

func (p *Foo2)  ReadField3(iprot thrift.Protocol) error {
  if v, err := iprot.ReadI32(); err != nil {
    return thrift.PrependError("error reading field 3: ", err)
  } else {
    p.Field1 = v
  }
  return nil
}

func (p *Foo2)  ReadField1(iprot thrift.Protocol) error {
  if v, err := iprot.ReadI32(); err != nil {
    return thrift.PrependError("error reading field 1: ", err)
  } else {
    p.Field2 = v
  }
  return nil
}

func (p *Foo2)  ReadField2(iprot thrift.Protocol) error {
  if v, err := iprot.ReadI32(); err != nil {
    return thrift.PrependError("error reading field 2: ", err)
  } else {
    p.Field3 = v
  }
  return nil
}

func (p *Foo2) Write(oprot thrift.Protocol) error {
  if err := oprot.WriteStructBegin("Foo2"); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T write struct begin error: ", p), err) }
  if err := p.writeField1(oprot); err != nil { return err }
  if err := p.writeField2(oprot); err != nil { return err }
  if err := p.writeField3(oprot); err != nil { return err }
  if err := oprot.WriteFieldStop(); err != nil {
    return thrift.PrependError("write field stop error: ", err) }
  if err := oprot.WriteStructEnd(); err != nil {
    return thrift.PrependError("write struct stop error: ", err) }
  return nil
}

func (p *Foo2) writeField1(oprot thrift.Protocol) (err error) {
  if err := oprot.WriteFieldBegin("field2", thrift.I32, 1); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T write field begin error 1:field2: ", p), err) }
  if err := oprot.WriteI32(int32(p.Field2)); err != nil {
  return thrift.PrependError(fmt.Sprintf("%T.field2 (1) field write error: ", p), err) }
  if err := oprot.WriteFieldEnd(); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T write field end error 1:field2: ", p), err) }
  return err
}

func (p *Foo2) writeField2(oprot thrift.Protocol) (err error) {
  if err := oprot.WriteFieldBegin("field3", thrift.I32, 2); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T write field begin error 2:field3: ", p), err) }
  if err := oprot.WriteI32(int32(p.Field3)); err != nil {
  return thrift.PrependError(fmt.Sprintf("%T.field3 (2) field write error: ", p), err) }
  if err := oprot.WriteFieldEnd(); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T write field end error 2:field3: ", p), err) }
  return err
}

func (p *Foo2) writeField3(oprot thrift.Protocol) (err error) {
  if err := oprot.WriteFieldBegin("field1", thrift.I32, 3); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T write field begin error 3:field1: ", p), err) }
  if err := oprot.WriteI32(int32(p.Field1)); err != nil {
  return thrift.PrependError(fmt.Sprintf("%T.field1 (3) field write error: ", p), err) }
  if err := oprot.WriteFieldEnd(); err != nil {
    return thrift.PrependError(fmt.Sprintf("%T write field end error 3:field1: ", p), err) }
  return err
}

func (p *Foo2) String() string {
  if p == nil {
    return "<nil>"
  }

  field2Val := fmt.Sprintf("%v", p.Field2)
  field3Val := fmt.Sprintf("%v", p.Field3)
  field1Val := fmt.Sprintf("%v", p.Field1)
  return fmt.Sprintf("Foo2({Field2:%s Field3:%s Field1:%s})", field2Val, field3Val, field1Val)
}

