<?php

namespace App\Server;

use Fine\Swoole\Server\TcpServer;

class RpcTcpServer extends TcpServer
{
    use RpcTrait;

    public function onReceive(\swoole_server $server, $fd, $reactor_id, $data)
    {
        $str = $this->callRpc($data);
        $this->server->send($fd, $str);
    }
}