<?php
/**
 * Tcp协议带路由
 * |----|-|...|...|
 * 数据总长度|路由地址长度|路由地址内容|主体内容
 */

namespace Fine\Protocol;


class TcpRouterData
{
    public $url = '';
    public $body = '';

    public $args = [];
    public $class = '';
    public $method = '';
}
