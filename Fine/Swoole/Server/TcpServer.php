<?php

namespace Fine\Swoole\Server;


use Fine\Swoole\Event\TcpEvent;
use Fine\Swoole\Server;

class TcpServer extends Server
{
    use TcpEvent;
}