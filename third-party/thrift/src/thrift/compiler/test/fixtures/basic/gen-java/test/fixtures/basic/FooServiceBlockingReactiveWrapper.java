/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */

package test.fixtures.basic;

import com.facebook.thrift.client.*;
import java.util.*;

public class FooServiceBlockingReactiveWrapper 
    implements FooService.Reactive {
    private final FooService _delegate;

    public FooServiceBlockingReactiveWrapper(FooService _delegate) {
        
        this._delegate = _delegate;
    }

    @java.lang.Override
    public void dispose() {
        _delegate.close();
    }

    @java.lang.Override
    public reactor.core.publisher.Mono<Void> simpleRpc() {
        reactor.core.publisher.Mono<Void> _m = reactor.core.publisher.Mono.<Void>create(_sink -> {
            try {
                reactor.util.context.ContextView _contextView = _sink.contextView();
                com.facebook.nifty.core.RequestContext
                    .tryContextView(_contextView)
                    .ifPresent(com.facebook.nifty.core.RequestContexts::setCurrentContext);
                _delegate.simpleRpc();
                _sink.success();
            } catch (Throwable _e) {
                throw reactor.core.Exceptions.propagate(_e);
            }
        });

        if (!com.facebook.thrift.util.resources.RpcResources.isForceExecutionOffEventLoop()) {
            _m = _m.subscribeOn(com.facebook.thrift.util.resources.RpcResources.getOffLoopScheduler());
        }

        return _m;
    }

}
