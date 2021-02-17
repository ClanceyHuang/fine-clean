<?php

namespace Fine\Swoole\Listener;


use Fine\Swoole\Event\TcpEvent;

class Tcp extends Port
{
    use TcpEvent;
}