/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */

package test.fixtures.basicannotations;

import com.facebook.swift.codec.*;
import com.facebook.swift.codec.ThriftField.Requiredness;
import com.facebook.swift.service.*;
import com.facebook.thrift.client.*;
import com.google.common.util.concurrent.ListenableFuture;
import java.io.*;
import java.util.*;
import reactor.core.publisher.Mono;

@SwiftGenerated
@com.facebook.swift.service.ThriftService("FooBarBazService")
public interface FooBarBazService extends java.io.Closeable, com.facebook.thrift.util.BlockingService {
    static com.facebook.thrift.server.RpcServerHandlerBuilder<FooBarBazService> serverHandlerBuilder(FooBarBazService _serverImpl) {
        return new com.facebook.thrift.server.RpcServerHandlerBuilder<FooBarBazService>(_serverImpl) {
                @java.lang.Override
                public com.facebook.thrift.server.RpcServerHandler build() {
                return new FooBarBazServiceRpcServerHandler(impl, eventHandlers);
            }
        };
    }

    static com.facebook.thrift.client.ClientBuilder<FooBarBazService> clientBuilder() {
        return new ClientBuilder<FooBarBazService>() {
            @java.lang.Override
            public FooBarBazService build(Mono<RpcClient> rpcClientMono) {
                FooBarBazService.Reactive _delegate =
                    new FooBarBazServiceReactiveClient(protocolId, rpcClientMono, headers, persistentHeaders);
                return new FooBarBazServiceReactiveBlockingWrapper(_delegate);
            }
        };
    }

    @com.facebook.swift.service.ThriftService("FooBarBazService")
    public interface Async extends java.io.Closeable, com.facebook.thrift.util.AsyncService {
        static com.facebook.thrift.server.RpcServerHandlerBuilder<FooBarBazService.Async> serverHandlerBuilder(FooBarBazService.Async _serverImpl) {
            return new com.facebook.thrift.server.RpcServerHandlerBuilder<FooBarBazService.Async>(_serverImpl) {
                @java.lang.Override
                public com.facebook.thrift.server.RpcServerHandler build() {
                    return new FooBarBazServiceRpcServerHandler(impl, eventHandlers);
                }
            };
        }

        static com.facebook.thrift.client.ClientBuilder<FooBarBazService.Async> clientBuilder() {
            return new ClientBuilder<FooBarBazService.Async>() {
                @java.lang.Override
                public FooBarBazService.Async build(Mono<RpcClient> rpcClientMono) {
                    FooBarBazService.Reactive _delegate =
                        new FooBarBazServiceReactiveClient(protocolId, rpcClientMono, headers, persistentHeaders);
                    return new FooBarBazServiceReactiveAsyncWrapper(_delegate);
                }
            };
        }

        @java.lang.Override void close();

        @ThriftMethod(value = "foo")
        ListenableFuture<Void> foo();

        default ListenableFuture<Void> foo(
            RpcOptions rpcOptions) {
            throw new UnsupportedOperationException();
        }

        default ListenableFuture<ResponseWrapper<Void>> fooWrapper(
            RpcOptions rpcOptions) {
            throw new UnsupportedOperationException();
        }

        @ThriftMethod(value = "bar")
        ListenableFuture<Void> bar();

        default ListenableFuture<Void> bar(
            RpcOptions rpcOptions) {
            throw new UnsupportedOperationException();
        }

        default ListenableFuture<ResponseWrapper<Void>> barWrapper(
            RpcOptions rpcOptions) {
            throw new UnsupportedOperationException();
        }

        @ThriftMethod(value = "baz")
        ListenableFuture<Void> baz();

        default ListenableFuture<Void> baz(
            RpcOptions rpcOptions) {
            throw new UnsupportedOperationException();
        }

        default ListenableFuture<ResponseWrapper<Void>> bazWrapper(
            RpcOptions rpcOptions) {
            throw new UnsupportedOperationException();
        }
    }
    @java.lang.Override void close();

    @ThriftMethod(value = "foo")
    void foo() throws org.apache.thrift.TException;

    default void foo(
        RpcOptions rpcOptions) throws org.apache.thrift.TException {
        throw new UnsupportedOperationException();
    }

    default ResponseWrapper<Void> fooWrapper(
        RpcOptions rpcOptions) throws org.apache.thrift.TException {
        throw new UnsupportedOperationException();
    }

    @ThriftMethod(value = "bar")
    void bar() throws org.apache.thrift.TException;

    default void bar(
        RpcOptions rpcOptions) throws org.apache.thrift.TException {
        throw new UnsupportedOperationException();
    }

    default ResponseWrapper<Void> barWrapper(
        RpcOptions rpcOptions) throws org.apache.thrift.TException {
        throw new UnsupportedOperationException();
    }

    @ThriftMethod(value = "baz")
    void baz() throws org.apache.thrift.TException;

    default void baz(
        RpcOptions rpcOptions) throws org.apache.thrift.TException {
        throw new UnsupportedOperationException();
    }

    default ResponseWrapper<Void> bazWrapper(
        RpcOptions rpcOptions) throws org.apache.thrift.TException {
        throw new UnsupportedOperationException();
    }

    @com.facebook.swift.service.ThriftService("FooBarBazService")
    interface Reactive extends reactor.core.Disposable, com.facebook.thrift.util.ReactiveService {
        static com.facebook.thrift.server.RpcServerHandlerBuilder<FooBarBazService.Reactive> serverHandlerBuilder(FooBarBazService.Reactive _serverImpl) {
            return new com.facebook.thrift.server.RpcServerHandlerBuilder<FooBarBazService.Reactive>(_serverImpl) {
                @java.lang.Override
                public com.facebook.thrift.server.RpcServerHandler build() {
                    return new FooBarBazServiceRpcServerHandler(impl, eventHandlers);
                }
            };
        }

        static com.facebook.thrift.client.ClientBuilder<FooBarBazService.Reactive> clientBuilder() {
            return new ClientBuilder<FooBarBazService.Reactive>() {
                @java.lang.Override
                public FooBarBazService.Reactive build(Mono<RpcClient> rpcClientMono) {
                    return new FooBarBazServiceReactiveClient(protocolId, rpcClientMono, headers, persistentHeaders);
                }
            };
        }

        @ThriftMethod(value = "foo")
        reactor.core.publisher.Mono<Void> foo();

        default reactor.core.publisher.Mono<Void> foo(RpcOptions rpcOptions) {
            throw new UnsupportedOperationException();
        }

        default reactor.core.publisher.Mono<ResponseWrapper<Void>> fooWrapper(RpcOptions rpcOptions) {
            throw new UnsupportedOperationException();
        }

        @ThriftMethod(value = "bar")
        reactor.core.publisher.Mono<Void> bar();

        default reactor.core.publisher.Mono<Void> bar(RpcOptions rpcOptions) {
            throw new UnsupportedOperationException();
        }

        default reactor.core.publisher.Mono<ResponseWrapper<Void>> barWrapper(RpcOptions rpcOptions) {
            throw new UnsupportedOperationException();
        }

        @ThriftMethod(value = "baz")
        reactor.core.publisher.Mono<Void> baz();

        default reactor.core.publisher.Mono<Void> baz(RpcOptions rpcOptions) {
            throw new UnsupportedOperationException();
        }

        default reactor.core.publisher.Mono<ResponseWrapper<Void>> bazWrapper(RpcOptions rpcOptions) {
            throw new UnsupportedOperationException();
        }

    }
}
