/*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

package thrift

// Autogenerated by Compiler (1.0.0-dev)
// DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING

/* THE FOLLOWING FILE WAS USED TO CREATE THIS

enum MyTestEnum {
	FIRST = 1,
	SECOND = 2,
	THIRD = 3,
	FOURTH = 4,
}

struct MyTestStruct {
	1: bool on,
	2: byte b,
	3: i16 int16,
	4: i32 int32,
	5: i64 int64,
	6: double d,
	7: float f,
	8: string st,
	9: binary bin,
	10: map<string, string> stringMap,
	11: list<string> stringList,
	12: set<string> stringSet,
	13: MyTestEnum e,
}
*/

import (
	"fmt"
)

// (needed to ensure safety because of naive import list construction.)
var _ = ZERO
var _ = fmt.Printf

var GoUnusedProtection__ int

type MyTestEnum int64

const (
	MyTestEnum_FIRST  MyTestEnum = 1
	MyTestEnum_SECOND MyTestEnum = 2
	MyTestEnum_THIRD  MyTestEnum = 3
	MyTestEnum_FOURTH MyTestEnum = 4
)

func (p MyTestEnum) String() string {
	switch p {
	case MyTestEnum_FIRST:
		return "FIRST"
	case MyTestEnum_SECOND:
		return "SECOND"
	case MyTestEnum_THIRD:
		return "THIRD"
	case MyTestEnum_FOURTH:
		return "FOURTH"
	}
	return "<UNSET>"
}

func MyTestEnumFromString(s string) (MyTestEnum, error) {
	switch s {
	case "FIRST":
		return MyTestEnum_FIRST, nil
	case "SECOND":
		return MyTestEnum_SECOND, nil
	case "THIRD":
		return MyTestEnum_THIRD, nil
	case "FOURTH":
		return MyTestEnum_FOURTH, nil
	}
	return MyTestEnum(0), fmt.Errorf("not a valid MyTestEnum string")
}

func MyTestEnumPtr(v MyTestEnum) *MyTestEnum { return &v }

// Attributes:
//  - On
//  - B
//  - Int16
//  - Int32
//  - Int64
//  - D
//  - F
//  - St
//  - Bin
//  - StringMap
//  - StringList
//  - StringSet
//  - E
type MyTestStruct struct {
	On         bool              `thrift:"on,1" json:"on"`
	B          byte              `thrift:"b,2" json:"b"`
	Int16      int16             `thrift:"int16,3" json:"int16"`
	Int32      int32             `thrift:"int32,4" json:"int32"`
	Int64      int64             `thrift:"int64,5" json:"int64"`
	D          float64           `thrift:"d,6" json:"d"`
	F          float32           `thrift:"f,7" json:"f"`
	St         string            `thrift:"st,8" json:"st"`
	Bin        []byte            `thrift:"bin,9" json:"bin"`
	StringMap  map[string]string `thrift:"stringMap,10" json:"stringMap"`
	StringList []string          `thrift:"stringList,11" json:"stringList"`
	StringSet  map[string]bool   `thrift:"stringSet,12" json:"stringSet"`
	E          MyTestEnum        `thrift:"e,13" json:"e"`
}

func NewMyTestStruct() *MyTestStruct {
	return &MyTestStruct{}
}

func (p *MyTestStruct) GetOn() bool {
	return p.On
}

func (p *MyTestStruct) GetB() byte {
	return p.B
}

func (p *MyTestStruct) GetInt16() int16 {
	return p.Int16
}

func (p *MyTestStruct) GetInt32() int32 {
	return p.Int32
}

func (p *MyTestStruct) GetInt64() int64 {
	return p.Int64
}

func (p *MyTestStruct) GetD() float64 {
	return p.D
}

func (p *MyTestStruct) GetF() float32 {
	return p.F
}

func (p *MyTestStruct) GetSt() string {
	return p.St
}

func (p *MyTestStruct) GetBin() []byte {
	return p.Bin
}

func (p *MyTestStruct) GetStringMap() map[string]string {
	return p.StringMap
}

func (p *MyTestStruct) GetStringList() []string {
	return p.StringList
}

func (p *MyTestStruct) GetStringSet() map[string]bool {
	return p.StringSet
}

func (p *MyTestStruct) GetE() MyTestEnum {
	return p.E
}
func (p *MyTestStruct) Read(iprot Protocol) error {
	if _, err := iprot.ReadStructBegin(); err != nil {
		return PrependError(fmt.Sprintf("%T read error: ", p), err)
	}

	for {
		_, fieldTypeId, fieldId, err := iprot.ReadFieldBegin()
		if err != nil {
			return PrependError(fmt.Sprintf("%T field %d read error: ", p, fieldId), err)
		}
		if fieldTypeId == STOP {
			break
		}
		switch fieldId {
		case 1:
			if err := p.ReadField1(iprot); err != nil {
				return err
			}
		case 2:
			if err := p.ReadField2(iprot); err != nil {
				return err
			}
		case 3:
			if err := p.ReadField3(iprot); err != nil {
				return err
			}
		case 4:
			if err := p.ReadField4(iprot); err != nil {
				return err
			}
		case 5:
			if err := p.ReadField5(iprot); err != nil {
				return err
			}
		case 6:
			if err := p.ReadField6(iprot); err != nil {
				return err
			}
		case 7:
			if err := p.ReadField7(iprot); err != nil {
				return err
			}
		case 8:
			if err := p.ReadField8(iprot); err != nil {
				return err
			}
		case 9:
			if err := p.ReadField9(iprot); err != nil {
				return err
			}
		case 10:
			if err := p.ReadField10(iprot); err != nil {
				return err
			}
		case 11:
			if err := p.ReadField11(iprot); err != nil {
				return err
			}
		case 12:
			if err := p.ReadField12(iprot); err != nil {
				return err
			}
		case 13:
			if err := p.ReadField13(iprot); err != nil {
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
		return PrependError(fmt.Sprintf("%T read struct end error: ", p), err)
	}
	return nil
}

func (p *MyTestStruct) ReadField1(iprot Protocol) error {
	if v, err := iprot.ReadBool(); err != nil {
		return PrependError("error reading field 1: ", err)
	} else {
		p.On = v
	}
	return nil
}

func (p *MyTestStruct) ReadField2(iprot Protocol) error {
	if v, err := iprot.ReadByte(); err != nil {
		return PrependError("error reading field 2: ", err)
	} else {
		temp := byte(v)
		p.B = temp
	}
	return nil
}

func (p *MyTestStruct) ReadField3(iprot Protocol) error {
	if v, err := iprot.ReadI16(); err != nil {
		return PrependError("error reading field 3: ", err)
	} else {
		p.Int16 = v
	}
	return nil
}

func (p *MyTestStruct) ReadField4(iprot Protocol) error {
	if v, err := iprot.ReadI32(); err != nil {
		return PrependError("error reading field 4: ", err)
	} else {
		p.Int32 = v
	}
	return nil
}

func (p *MyTestStruct) ReadField5(iprot Protocol) error {
	if v, err := iprot.ReadI64(); err != nil {
		return PrependError("error reading field 5: ", err)
	} else {
		p.Int64 = v
	}
	return nil
}

func (p *MyTestStruct) ReadField6(iprot Protocol) error {
	if v, err := iprot.ReadDouble(); err != nil {
		return PrependError("error reading field 6: ", err)
	} else {
		p.D = v
	}
	return nil
}

func (p *MyTestStruct) ReadField7(iprot Protocol) error {
	if v, err := iprot.ReadFloat(); err != nil {
		return PrependError("error reading field 7: ", err)
	} else {
		p.F = v
	}
	return nil
}

func (p *MyTestStruct) ReadField8(iprot Protocol) error {
	if v, err := iprot.ReadString(); err != nil {
		return PrependError("error reading field 8: ", err)
	} else {
		p.St = v
	}
	return nil
}

func (p *MyTestStruct) ReadField9(iprot Protocol) error {
	if v, err := iprot.ReadBinary(); err != nil {
		return PrependError("error reading field 9: ", err)
	} else {
		p.Bin = v
	}
	return nil
}

func (p *MyTestStruct) ReadField10(iprot Protocol) error {
	_, _, size, err := iprot.ReadMapBegin()
	if err != nil {
		return PrependError("error reading map begin: ", err)
	}
	tMap := make(map[string]string, size)
	p.StringMap = tMap
	for i := 0; i < size; i++ {
		var _key0 string
		if v, err := iprot.ReadString(); err != nil {
			return PrependError("error reading field 0: ", err)
		} else {
			_key0 = v
		}
		var _val1 string
		if v, err := iprot.ReadString(); err != nil {
			return PrependError("error reading field 0: ", err)
		} else {
			_val1 = v
		}
		p.StringMap[_key0] = _val1
	}
	if err := iprot.ReadMapEnd(); err != nil {
		return PrependError("error reading map end: ", err)
	}
	return nil
}

func (p *MyTestStruct) ReadField11(iprot Protocol) error {
	_, size, err := iprot.ReadListBegin()
	if err != nil {
		return PrependError("error reading list begin: ", err)
	}
	tSlice := make([]string, 0, size)
	p.StringList = tSlice
	for i := 0; i < size; i++ {
		var _elem2 string
		if v, err := iprot.ReadString(); err != nil {
			return PrependError("error reading field 0: ", err)
		} else {
			_elem2 = v
		}
		p.StringList = append(p.StringList, _elem2)
	}
	if err := iprot.ReadListEnd(); err != nil {
		return PrependError("error reading list end: ", err)
	}
	return nil
}

func (p *MyTestStruct) ReadField12(iprot Protocol) error {
	_, size, err := iprot.ReadSetBegin()
	if err != nil {
		return PrependError("error reading set begin: ", err)
	}
	tSet := make(map[string]bool, size)
	p.StringSet = tSet
	for i := 0; i < size; i++ {
		var _elem3 string
		if v, err := iprot.ReadString(); err != nil {
			return PrependError("error reading field 0: ", err)
		} else {
			_elem3 = v
		}
		p.StringSet[_elem3] = true
	}
	if err := iprot.ReadSetEnd(); err != nil {
		return PrependError("error reading set end: ", err)
	}
	return nil
}

func (p *MyTestStruct) ReadField13(iprot Protocol) error {
	if v, err := iprot.ReadI32(); err != nil {
		return PrependError("error reading field 13: ", err)
	} else {
		temp := MyTestEnum(v)
		p.E = temp
	}
	return nil
}

func (p *MyTestStruct) Write(oprot Protocol) error {
	if err := oprot.WriteStructBegin("MyTestStruct"); err != nil {
		return PrependError(fmt.Sprintf("%T write struct begin error: ", p), err)
	}
	if err := p.writeField1(oprot); err != nil {
		return err
	}
	if err := p.writeField2(oprot); err != nil {
		return err
	}
	if err := p.writeField3(oprot); err != nil {
		return err
	}
	if err := p.writeField4(oprot); err != nil {
		return err
	}
	if err := p.writeField5(oprot); err != nil {
		return err
	}
	if err := p.writeField6(oprot); err != nil {
		return err
	}
	if err := p.writeField7(oprot); err != nil {
		return err
	}
	if err := p.writeField8(oprot); err != nil {
		return err
	}
	if err := p.writeField9(oprot); err != nil {
		return err
	}
	if err := p.writeField10(oprot); err != nil {
		return err
	}
	if err := p.writeField11(oprot); err != nil {
		return err
	}
	if err := p.writeField12(oprot); err != nil {
		return err
	}
	if err := p.writeField13(oprot); err != nil {
		return err
	}
	if err := oprot.WriteFieldStop(); err != nil {
		return PrependError("write field stop error: ", err)
	}
	if err := oprot.WriteStructEnd(); err != nil {
		return PrependError("write struct stop error: ", err)
	}
	return nil
}

func (p *MyTestStruct) writeField1(oprot Protocol) (err error) {
	if err := oprot.WriteFieldBegin("on", BOOL, 1); err != nil {
		return PrependError(fmt.Sprintf("%T write field begin error 1:on: ", p), err)
	}
	if err := oprot.WriteBool(bool(p.On)); err != nil {
		return PrependError(fmt.Sprintf("%T.on (1) field write error: ", p), err)
	}
	if err := oprot.WriteFieldEnd(); err != nil {
		return PrependError(fmt.Sprintf("%T write field end error 1:on: ", p), err)
	}
	return err
}

func (p *MyTestStruct) writeField2(oprot Protocol) (err error) {
	if err := oprot.WriteFieldBegin("b", BYTE, 2); err != nil {
		return PrependError(fmt.Sprintf("%T write field begin error 2:b: ", p), err)
	}
	if err := oprot.WriteByte(byte(p.B)); err != nil {
		return PrependError(fmt.Sprintf("%T.b (2) field write error: ", p), err)
	}
	if err := oprot.WriteFieldEnd(); err != nil {
		return PrependError(fmt.Sprintf("%T write field end error 2:b: ", p), err)
	}
	return err
}

func (p *MyTestStruct) writeField3(oprot Protocol) (err error) {
	if err := oprot.WriteFieldBegin("int16", I16, 3); err != nil {
		return PrependError(fmt.Sprintf("%T write field begin error 3:int16: ", p), err)
	}
	if err := oprot.WriteI16(int16(p.Int16)); err != nil {
		return PrependError(fmt.Sprintf("%T.int16 (3) field write error: ", p), err)
	}
	if err := oprot.WriteFieldEnd(); err != nil {
		return PrependError(fmt.Sprintf("%T write field end error 3:int16: ", p), err)
	}
	return err
}

func (p *MyTestStruct) writeField4(oprot Protocol) (err error) {
	if err := oprot.WriteFieldBegin("int32", I32, 4); err != nil {
		return PrependError(fmt.Sprintf("%T write field begin error 4:int32: ", p), err)
	}
	if err := oprot.WriteI32(int32(p.Int32)); err != nil {
		return PrependError(fmt.Sprintf("%T.int32 (4) field write error: ", p), err)
	}
	if err := oprot.WriteFieldEnd(); err != nil {
		return PrependError(fmt.Sprintf("%T write field end error 4:int32: ", p), err)
	}
	return err
}

func (p *MyTestStruct) writeField5(oprot Protocol) (err error) {
	if err := oprot.WriteFieldBegin("int64", I64, 5); err != nil {
		return PrependError(fmt.Sprintf("%T write field begin error 5:int64: ", p), err)
	}
	if err := oprot.WriteI64(int64(p.Int64)); err != nil {
		return PrependError(fmt.Sprintf("%T.int64 (5) field write error: ", p), err)
	}
	if err := oprot.WriteFieldEnd(); err != nil {
		return PrependError(fmt.Sprintf("%T write field end error 5:int64: ", p), err)
	}
	return err
}

func (p *MyTestStruct) writeField6(oprot Protocol) (err error) {
	if err := oprot.WriteFieldBegin("d", DOUBLE, 6); err != nil {
		return PrependError(fmt.Sprintf("%T write field begin error 6:d: ", p), err)
	}
	if err := oprot.WriteDouble(float64(p.D)); err != nil {
		return PrependError(fmt.Sprintf("%T.d (6) field write error: ", p), err)
	}
	if err := oprot.WriteFieldEnd(); err != nil {
		return PrependError(fmt.Sprintf("%T write field end error 6:d: ", p), err)
	}
	return err
}

func (p *MyTestStruct) writeField7(oprot Protocol) (err error) {
	if err := oprot.WriteFieldBegin("f", FLOAT, 7); err != nil {
		return PrependError(fmt.Sprintf("%T write field begin error 7:f: ", p), err)
	}
	if err := oprot.WriteFloat(float32(p.F)); err != nil {
		return PrependError(fmt.Sprintf("%T.f (7) field write error: ", p), err)
	}
	if err := oprot.WriteFieldEnd(); err != nil {
		return PrependError(fmt.Sprintf("%T write field end error 7:f: ", p), err)
	}
	return err
}

func (p *MyTestStruct) writeField8(oprot Protocol) (err error) {
	if err := oprot.WriteFieldBegin("st", STRING, 8); err != nil {
		return PrependError(fmt.Sprintf("%T write field begin error 8:st: ", p), err)
	}
	if err := oprot.WriteString(string(p.St)); err != nil {
		return PrependError(fmt.Sprintf("%T.st (8) field write error: ", p), err)
	}
	if err := oprot.WriteFieldEnd(); err != nil {
		return PrependError(fmt.Sprintf("%T write field end error 8:st: ", p), err)
	}
	return err
}

func (p *MyTestStruct) writeField9(oprot Protocol) (err error) {
	if err := oprot.WriteFieldBegin("bin", STRING, 9); err != nil {
		return PrependError(fmt.Sprintf("%T write field begin error 9:bin: ", p), err)
	}
	if err := oprot.WriteBinary(p.Bin); err != nil {
		return PrependError(fmt.Sprintf("%T.bin (9) field write error: ", p), err)
	}
	if err := oprot.WriteFieldEnd(); err != nil {
		return PrependError(fmt.Sprintf("%T write field end error 9:bin: ", p), err)
	}
	return err
}

func (p *MyTestStruct) writeField10(oprot Protocol) (err error) {
	if err := oprot.WriteFieldBegin("stringMap", MAP, 10); err != nil {
		return PrependError(fmt.Sprintf("%T write field begin error 10:stringMap: ", p), err)
	}
	if err := oprot.WriteMapBegin(STRING, STRING, len(p.StringMap)); err != nil {
		return PrependError("error writing map begin: ", err)
	}
	for k, v := range p.StringMap {
		if err := oprot.WriteString(string(k)); err != nil {
			return PrependError(fmt.Sprintf("%T. (0) field write error: ", p), err)
		}
		if err := oprot.WriteString(string(v)); err != nil {
			return PrependError(fmt.Sprintf("%T. (0) field write error: ", p), err)
		}
	}
	if err := oprot.WriteMapEnd(); err != nil {
		return PrependError("error writing map end: ", err)
	}
	if err := oprot.WriteFieldEnd(); err != nil {
		return PrependError(fmt.Sprintf("%T write field end error 10:stringMap: ", p), err)
	}
	return err
}

func (p *MyTestStruct) writeField11(oprot Protocol) (err error) {
	if err := oprot.WriteFieldBegin("stringList", LIST, 11); err != nil {
		return PrependError(fmt.Sprintf("%T write field begin error 11:stringList: ", p), err)
	}
	if err := oprot.WriteListBegin(STRING, len(p.StringList)); err != nil {
		return PrependError("error writing list begin: ", err)
	}
	for _, v := range p.StringList {
		if err := oprot.WriteString(string(v)); err != nil {
			return PrependError(fmt.Sprintf("%T. (0) field write error: ", p), err)
		}
	}
	if err := oprot.WriteListEnd(); err != nil {
		return PrependError("error writing list end: ", err)
	}
	if err := oprot.WriteFieldEnd(); err != nil {
		return PrependError(fmt.Sprintf("%T write field end error 11:stringList: ", p), err)
	}
	return err
}

func (p *MyTestStruct) writeField12(oprot Protocol) (err error) {
	if err := oprot.WriteFieldBegin("stringSet", SET, 12); err != nil {
		return PrependError(fmt.Sprintf("%T write field begin error 12:stringSet: ", p), err)
	}
	if err := oprot.WriteSetBegin(STRING, len(p.StringSet)); err != nil {
		return PrependError("error writing set begin: ", err)
	}
	for v, _ := range p.StringSet {
		if err := oprot.WriteString(string(v)); err != nil {
			return PrependError(fmt.Sprintf("%T. (0) field write error: ", p), err)
		}
	}
	if err := oprot.WriteSetEnd(); err != nil {
		return PrependError("error writing set end: ", err)
	}
	if err := oprot.WriteFieldEnd(); err != nil {
		return PrependError(fmt.Sprintf("%T write field end error 12:stringSet: ", p), err)
	}
	return err
}

func (p *MyTestStruct) writeField13(oprot Protocol) (err error) {
	if err := oprot.WriteFieldBegin("e", I32, 13); err != nil {
		return PrependError(fmt.Sprintf("%T write field begin error 13:e: ", p), err)
	}
	if err := oprot.WriteI32(int32(p.E)); err != nil {
		return PrependError(fmt.Sprintf("%T.e (13) field write error: ", p), err)
	}
	if err := oprot.WriteFieldEnd(); err != nil {
		return PrependError(fmt.Sprintf("%T write field end error 13:e: ", p), err)
	}
	return err
}

func (p *MyTestStruct) String() string {
	if p == nil {
		return "<nil>"
	}
	return fmt.Sprintf("MyTestStruct(%+v)", *p)
}
