<?php
\Fine\Database\Mysql\Connect::setConfig(config('mysql', true));
\Fine\Log::setConfig(config('log', true));
\Fine\Http\Router::setConfig(['path' => _APP_PATH_ . '/Config/router.php']);
\Fine\Cache\File::setConfig(config('cache.file', false));
\Fine\Cache\Redis::setConfig(config('cache.redis', false));
\Fine\Crypt\Openssl::setConfig(config('crypt', true));

// 分布式配置
\App\Cloud\Server::setConfig(config('cloud', false));
\Fine\Swoole\FineServer::setConfig(config(isset($argv[1]) ? $argv[1] : 'protocol', false));
\Fine\Swoole\Client\Tcp::setConfig(config('client', false));

// 加载rpc配置
require _APP_PATH_ . '/Config/rpc.php';

// 解析路由
\Fine\Http\Router::loadRouter();




