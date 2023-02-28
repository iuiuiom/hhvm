// @generated by Thrift for [[[ program path ]]]
// This file is probably not the place you want to edit!

package transitive // [[[ program thrift source path ]]]

import (
  "fmt"

  "github.com/facebook/fbthrift/thrift/lib/go/thrift"
)


// (needed to ensure safety because of naive import list construction)
var _ = fmt.Printf
var _ = thrift.ZERO


type Foo struct {
    A int64 `thrift:"a,1" json:"a" db:"a"`
}
// Compile time interface enforcer
var _ thrift.Struct = &Foo{}

func NewFoo() *Foo {
    return (&Foo{}).
        SetA(2)
}

func (x *Foo) GetA() int64 {
    return x.A
}

func (x *Foo) SetA(value int64) *Foo {
    x.A = value
    return x
}


func (x *Foo) writeField1(p thrift.Protocol) error {  // A
    if err := p.WriteFieldBegin("a", thrift.I64, 1); err != nil {
        return thrift.PrependError(fmt.Sprintf("%T write field begin error: ", x), err)
    }

    item := x.GetA()
    if err := p.WriteI64(item); err != nil {
    return err
}

    if err := p.WriteFieldEnd(); err != nil {
        return thrift.PrependError(fmt.Sprintf("%T write field end error: ", x), err)
    }
    return nil
}

func (x *Foo) readField1(p thrift.Protocol) error {  // A
    result, err := p.ReadI64()
if err != nil {
    return err
}

    x.SetA(result)
    return nil
}

func (x *Foo) String() string {
    return fmt.Sprintf("%+v", x)
}


// Deprecated: Use Foo.Set* methods instead or set the fields directly.
type FooBuilder struct {
    obj *Foo
}

func NewFooBuilder() *FooBuilder {
    return &FooBuilder{
        obj: NewFoo(),
    }
}

func (x *FooBuilder) A(value int64) *FooBuilder {
    x.obj.A = value
    return x
}

func (x *FooBuilder) Emit() *Foo {
    var objCopy Foo = *x.obj
    return &objCopy
}
func (x *Foo) Write(p thrift.Protocol) error {
    if err := p.WriteStructBegin("Foo"); err != nil {
        return thrift.PrependError(fmt.Sprintf("%T write struct begin error: ", x), err)
    }

    if err := x.writeField1(p); err != nil {
        return err
    }

    if err := p.WriteFieldStop(); err != nil {
        return thrift.PrependError(fmt.Sprintf("%T write field stop error: ", x), err)
    }

    if err := p.WriteStructEnd(); err != nil {
        return thrift.PrependError(fmt.Sprintf("%T write struct end error: ", x), err)
    }
    return nil
}

func (x *Foo) Read(p thrift.Protocol) error {
    if _, err := p.ReadStructBegin(); err != nil {
        return thrift.PrependError(fmt.Sprintf("%T read error: ", x), err)
    }

    for {
        _, typ, id, err := p.ReadFieldBegin()
        if err != nil {
            return thrift.PrependError(fmt.Sprintf("%T field %d read error: ", x, id), err)
        }

        if typ == thrift.STOP {
            break;
        }

        switch id {
        case 1:  // a
            if err := x.readField1(p); err != nil {
                return err
            }
        default:
            if err := p.Skip(typ); err != nil {
                return err
            }
        }

        if err := p.ReadFieldEnd(); err != nil {
            return err
        }
    }

    if err := p.ReadStructEnd(); err != nil {
        return thrift.PrependError(fmt.Sprintf("%T read struct end error: ", x), err)
    }

    return nil
}
