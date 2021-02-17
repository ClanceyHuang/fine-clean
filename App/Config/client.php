<?php

return [
    'global_data' => [
        'max_connect_count' => 10,
        'type'              => SWOOLE_SOCK_TCP,
        'ip'                => '127.0.0.1',
        'port'              => 9086,
        'time_out'          => 0.5,
        'pack_protocol'     => \Fine\Protocol\Frame::class,
        'set'               => [
            'open_length_check'   => 1,
            'package_length_func' => '\Fine\Protocol\Frame::length',
            'package_body_offset' => \Fine\Protocol\Frame::HEAD_LEN,
        ]
    ],
//    'rpc'         => [
//        'max_connect_count' => 10,
//        'type'              => SWOOLE_SOCK_TCP,
//        'ip'                => '127.0.0.1',
//        'port'              => 8083,
//        'time_out'          => 0.5,
//        'pack_protocol'     => \Fine\Protocol\Frame::class,
//        'set'               => [
//            'open_length_check'   => 1,
//            'package_length_func' => '\Fine\Protocol\Frame::length',
//            'package_body_offset' => \Fine\Protocol\Frame::HEAD_LEN,
//        ]
//    ]
];
