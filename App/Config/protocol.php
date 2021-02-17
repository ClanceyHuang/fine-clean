<?php
# http,websocket,tcp 服务器配置
return [
    'server' => [
        'server_type' => \Fine\Swoole\FineServer::SWOOLE_HTTP_SERVER,
        'port'        => 8081,
        'action'      => \App\Server\AppHttpServer::class,
        'mode'        => SWOOLE_PROCESS,
        'sock_type'   => SWOOLE_SOCK_TCP,
        'ip'          => '0.0.0.0',
        'set'         => [
//            'worker_num' => 10
        ],
    ]
];
