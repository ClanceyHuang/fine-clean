<?php

namespace Fine\Swoole\Listener;


use Fine\Swoole\Event\HttpEvent;

class Http extends Port
{
    use HttpEvent;
}