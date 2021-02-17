<?php

return [

    # [file | redis | memcache ] 调用Cache:: 相关方法使用的缓存驱动
    'drive' => 'file',

    # 文件缓存
    'file' => [
        # 文件缓存位置
        'path' => _APP_PATH_ . '/RunCache/cache',
        # 文件前缀
        'prefix' => 'fine_'
    ],


    # redis缓存配置
    'redis' => [
        # 默认配置方法
        'master' => [
            # 连接池最大数量
            'max_connect_count' => 10, 
            'host' => '127.0.0.1',
            'port' => 6379,
            'prefix' => 'fine_',
            'Auth' => ''
        ],
        # redis cluster 配置
        'cluster' => [
            # 连接池最大数量
            'max_connect_count' => 10,
            # 初始化参数
            'args' => [ null, ['192.168.1.10:6380','192.168.1.10:6381'],1.5,1.5,false,'password'],
            'is_cluster' => true,
            'prefix' => 'fine_',
            'Auth' => ''
        ]
    ],

    # memcache缓存配置
    'memcache'=>[
        'master' => [
            # 连接池最大数量
            'max_connect_count'=>10,
            'host' => '127.0.0.1',
            'port' => 11211,
            'prefix' => 'fine_',
            'Auth' => ''
        ],
        'cluster'=>[
            # 连接池最大数量
            'max_connect_count' => 10,
            # 初始化参数
            'args' => [ null, ['192.168.1.10:11212','192.168.1.10:11213'],1.5,1.5,false,'password'],
            'is_cluster' => true,
            'prefix' => 'fine_',
            'Auth' => ''
        ]
    ],

];

