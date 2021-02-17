<?php

namespace Fine\Swoole\Server;


use Fine\Swoole\Event\HttpEvent;
use Fine\Swoole\Server;

class HttpServer extends Server
{
    use HttpEvent;
}