<?php

namespace Fine\Swoole\Server;

use Fine\Swoole\Event\HttpEvent;
use Fine\Swoole\Event\WsEvent;
use Fine\Swoole\Server;
use Fine\Swoole\Session;

class WsServer extends Server
{
    use WsEvent;

    /**
     * @var Session[]
     */
    protected $session = [];

}