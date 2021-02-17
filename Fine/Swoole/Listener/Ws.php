<?php

namespace Fine\Swoole\Listener;

use Fine\Swoole\Event\WsEvent;

class Ws extends Port
{
    use WsEvent;

    /**
     * @var array
     */
    protected $session = [];


}