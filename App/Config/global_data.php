<?php

return [
    'server' => [
        # 主服务器类型
        'server_type'   => \Fine\Swoole\FineServer::SWOOLE_SERVER,
        'port'          => 9086,
        # 主服务器事件回调类
        'action'        => \App\GlobalData\Server::class,
        'mode'          => SWOOLE_BASE,
        'sock_type'     => SWOOLE_SOCK_TCP,
        'ip'            => '127.0.0.1',
        # tcp 打包 解包协议
        'pack_protocol' => \Fine\Protocol\Frame::class,
        # set 相关配置
        'set'           => [
            'worker_num'          => 1,
            'reactor_num'         => 1,
            'open_length_check'   => 1,
            'package_length_func' => '\Fine\Protocol\Frame::length',
            'package_body_offset' => \Fine\Protocol\Frame::HEAD_LEN,
        ],
        'save_path'     => _APP_PATH_ . '/RunCache/data.msg'
    ]
];
