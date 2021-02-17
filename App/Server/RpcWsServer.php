<?php

namespace App\Server;

use Fine\Swoole\Server\WsServer;

class RpcWsServer extends WsServer
{
    use RpcTrait;

    public function onMessage(\swoole_websocket_server $server, \swoole_websocket_frame $frame)
    {
        $str = $this->callRpc($frame->data);
        $server->push($frame->fd, $str);
    }
}