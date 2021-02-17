<?php

namespace Fine\Swoole\Listener;


use Fine\Swoole\Event\UdpEvent;

class Udp extends Port
{
    use UdpEvent;
}