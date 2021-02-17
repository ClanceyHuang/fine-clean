<?php

namespace Fine\Swoole\Server;


use Fine\Swoole\Event\UdpEvent;
use Fine\Swoole\Server;

class UdpServer extends Server
{
    use UdpEvent;

}