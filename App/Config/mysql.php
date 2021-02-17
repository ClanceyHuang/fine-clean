<?php

return [
    # 是否打印sql日志
    'debug_log' => true,
    # 默认数据库
    'default'      => [
        'max_connect_count' => 10,
        'dns'               => env('mysql.default.dns', 'mysql:host=127.0.0.1;dbname=fine'),
        'username'          => env('mysql.default.username', 'root'),
        'password'          => env('mysql.default.password', 'root'),
        'ops'               => [
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4',
            PDO::ATTR_EMULATE_PREPARES   => false,
            PDO::ATTR_PERSISTENT         => false
        ]
    ],
];
