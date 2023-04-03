/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */

package test.fixtures.adapter;

import com.facebook.swift.codec.*;
import com.facebook.swift.codec.ThriftField.Requiredness;
import com.facebook.swift.codec.ThriftField.Recursiveness;
import java.util.*;
import org.apache.thrift.*;
import org.apache.thrift.transport.*;
import org.apache.thrift.protocol.*;

import static com.google.common.base.MoreObjects.toStringHelper;

@SwiftGenerated
@ThriftUnion("AdaptTestUnion")
public final class AdaptTestUnion implements com.facebook.thrift.payload.ThriftSerializable {
    
    private static final TStruct STRUCT_DESC = new TStruct("AdaptTestUnion");
    private static final Map<String, Integer> NAMES_TO_IDS = new HashMap();
    public static final Map<String, Integer> THRIFT_NAMES_TO_IDS = new HashMap();
    private static final Map<Integer, TField> FIELD_METADATA = new HashMap<>();
    private static final AdaptTestUnion _DEFAULT = new AdaptTestUnion();

    public static final int _DELAY = 1;
    private static final TField DELAY_FIELD_DESC = new TField("delay", TType.I64, (short)1);
    public static final int _CUSTOM = 2;
    private static final TField CUSTOM_FIELD_DESC = new TField("custom", TType.STRING, (short)2);

    static {
      NAMES_TO_IDS.put("delay", 1);
      THRIFT_NAMES_TO_IDS.put("delay", 1);
      FIELD_METADATA.put(1, DELAY_FIELD_DESC);
      NAMES_TO_IDS.put("custom", 2);
      THRIFT_NAMES_TO_IDS.put("custom", 2);
      FIELD_METADATA.put(2, CUSTOM_FIELD_DESC);
      com.facebook.thrift.type.TypeRegistry.add(new com.facebook.thrift.type.Type(
        new com.facebook.thrift.type.UniversalName("facebook.com/thrift/test/AdaptTestUnion"),
        AdaptTestUnion.class, AdaptTestUnion::read0));
    }

    private java.lang.Object value;
    private short id;

    public static AdaptTestUnion from(int _id, java.lang.Object _field) {
        return from((short) _id, _field);
    }

    public static AdaptTestUnion from(short _id, java.lang.Object _field) {
        java.util.Objects.requireNonNull(_field);
        if (!FIELD_METADATA.containsKey(Integer.valueOf(_id))) {
            throw new java.lang.IllegalArgumentException("unknown field " + _id);
        }

        AdaptTestUnion _u = new  AdaptTestUnion();

        try {
            switch(_id) {
                case 1:
                    _u.id = _id;
                    _u.value = (long) _field;
                    return _u;
                case 2:
                    _u.id = _id;
                    _u.value = (byte[]) _field;
                    return _u;
                default:
                throw new IllegalArgumentException("invalid type " + _field.getClass().getName() + " for field " + _id);
            }
        } catch (java.lang.Exception t) {
            throw new IllegalArgumentException("invalid type " + _field.getClass().getName() + " for field " + _id);
        }
    }

    @ThriftConstructor
    public AdaptTestUnion() {
    }
    
    @ThriftConstructor
    @Deprecated
    public AdaptTestUnion(final long delay) {
        this.value = delay;
        this.id = 1;
    }
    
    @ThriftConstructor
    @Deprecated
    public AdaptTestUnion(final byte[] custom) {
        this.value = custom;
        this.id = 2;
    }
    
    public static AdaptTestUnion fromDelay(final long delay) {
        AdaptTestUnion res = new AdaptTestUnion();
        res.value = delay;
        res.id = 1;
        return res;
    }
    
    public static AdaptTestUnion fromCustom(final byte[] custom) {
        AdaptTestUnion res = new AdaptTestUnion();
        res.value = custom;
        res.id = 2;
        return res;
    }
    

    @com.facebook.swift.codec.ThriftField(value=1, name="delay", requiredness=Requiredness.NONE)
    public long getDelay() {
        if (this.id != 1) {
            throw new IllegalStateException("Not a delay element!");
        }
        return (long) value;
    }

    public boolean isSetDelay() {
        return this.id == 1;
    }

    @com.facebook.swift.codec.ThriftField(value=2, name="custom", requiredness=Requiredness.NONE)
    public byte[] getCustom() {
        if (this.id != 2) {
            throw new IllegalStateException("Not a custom element!");
        }
        return (byte[]) value;
    }

    public boolean isSetCustom() {
        return this.id == 2;
    }

    @ThriftUnionId
    public short getThriftId() {
        return this.id;
    }

    public String getThriftName() {
        TField tField = (TField) FIELD_METADATA.get((int) this.id);
        if (tField == null) {
            return "null";
        } else {
            return tField.name;
        }
    }

    public void accept(Visitor visitor) {
        if (isSetDelay()) {
            visitor.visitDelay(getDelay());
            return;
        }
        if (isSetCustom()) {
            visitor.visitCustom(getCustom());
            return;
        }
    }

    @java.lang.Override
    public String toString() {
        return toStringHelper(this)
            .add("value", value)
            .add("id", id)
            .add("name", getThriftName())
            .add("type", value == null ? "<null>" : value.getClass().getSimpleName())
            .toString();
    }

    @java.lang.Override
    public boolean equals(java.lang.Object o) {
        if (this == o) {
            return true;
        }
        if (o == null || getClass() != o.getClass()) {
            return false;
        }

        AdaptTestUnion other = (AdaptTestUnion)o;

        return Objects.equals(this.id, other.id)
                && Objects.deepEquals(this.value, other.value);
    }

    @java.lang.Override
    public int hashCode() {
        return Arrays.deepHashCode(new java.lang.Object[] {
            id,
            value,
        });
    }

    public interface Visitor {
        void visitDelay(long delay);
        void visitCustom(byte[] custom);
    }

    public void write0(TProtocol oprot) throws TException {
      if (this.id != 0 && this.value == null ){
         return;
      }
      oprot.writeStructBegin(STRUCT_DESC);
      switch (this.id) {
      case _DELAY: {
        oprot.writeFieldBegin(DELAY_FIELD_DESC);
        long delay = (long)this.value;
        oprot.writeI64(delay);
        oprot.writeFieldEnd();
        break;
      }
      case _CUSTOM: {
        oprot.writeFieldBegin(CUSTOM_FIELD_DESC);
        byte[] custom = (byte[])this.value;
        oprot.writeBinary(java.nio.ByteBuffer.wrap(custom));
        oprot.writeFieldEnd();
        break;
      }
      default:
          // ignore unknown field
      }
      oprot.writeFieldStop();
      oprot.writeStructEnd();
    }
    
    
    public static com.facebook.thrift.payload.Reader<AdaptTestUnion> asReader() {
      return AdaptTestUnion::read0;
    }
    
    public static AdaptTestUnion read0(TProtocol oprot) throws TException {
      AdaptTestUnion res = new AdaptTestUnion();
      res.value = null;
      res.id = (short) 0;
      oprot.readStructBegin(AdaptTestUnion.NAMES_TO_IDS, AdaptTestUnion.THRIFT_NAMES_TO_IDS, AdaptTestUnion.FIELD_METADATA);
      TField __field = oprot.readFieldBegin();
      if (__field.type != TType.STOP) {
          switch (__field.id) {
          case _DELAY:
            if (__field.type == DELAY_FIELD_DESC.type) {
              long delay = oprot.readI64();
              res.value = delay;
            }
            break;
          case _CUSTOM:
            if (__field.type == CUSTOM_FIELD_DESC.type) {
              byte[] custom = oprot.readBinary().array();
              res.value = custom;
            }
            break;
          default:
            TProtocolUtil.skip(oprot, __field.type);
          }
        if (res.value != null) {
          res.id = __field.id;
        }
        oprot.readFieldEnd();
        TField __stopField = oprot.readFieldBegin(); // Consume the STOP byte
        if (__stopField.type != TType.STOP) {
          throw new TProtocolException(TProtocolException.INVALID_DATA, "Union 'AdaptTestUnion' is missing a STOP byte");
        }
      }
      oprot.readStructEnd();
      return res;
    }
    public static AdaptTestUnion defaultInstance() {
        return _DEFAULT;
    }

}
