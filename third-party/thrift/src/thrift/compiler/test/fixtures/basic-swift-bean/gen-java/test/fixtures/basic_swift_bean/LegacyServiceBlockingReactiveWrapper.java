/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */

package test.fixtures.basic_swift_bean;

import com.facebook.thrift.client.*;
import java.util.*;

public class LegacyServiceBlockingReactiveWrapper 
    implements LegacyService.Reactive {
    private final LegacyService _delegate;

    public LegacyServiceBlockingReactiveWrapper(LegacyService _delegate) {
        
        this._delegate = _delegate;
    }

    @java.lang.Override
    public void dispose() {
        _delegate.close();
    }

    @java.lang.Override
    public reactor.core.publisher.Mono<Map<String, List<Integer>>> getPoints(final Set<String> key, final long legacyStuff) {
        reactor.core.publisher.Mono<Map<String, List<Integer>>> _m = reactor.core.publisher.Mono.create(_sink -> {
            try {
                reactor.util.context.ContextView _contextView = _sink.contextView();
                com.facebook.nifty.core.RequestContext
                    .tryContextView(_contextView)
                    .ifPresent(com.facebook.nifty.core.RequestContexts::setCurrentContext);
                _sink.success(_delegate.getPoints(key, legacyStuff));
            } catch (Throwable _e) {
                _sink.error(_e);
            }
        });

        if (!com.facebook.thrift.util.resources.RpcResources.isForceExecutionOffEventLoop()) {
            _m = _m.subscribeOn(com.facebook.thrift.util.resources.RpcResources.getOffLoopScheduler());
        }

        return _m;
    }

}
