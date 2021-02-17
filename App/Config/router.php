<?php
# 路由设置
use Fine\Http\Router;

Router::group([
    # 接口缓存设置为1s，根据业务调整，不需要缓存可以置0
    'cache' => 1
], function () {
    # login
    Router::get('/', \App\Controllers\Index::class . '@index');
});

