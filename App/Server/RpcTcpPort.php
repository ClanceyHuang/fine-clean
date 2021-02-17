<?php

namespace App\Server;

use Fine\Swoole\Listener\Tcp;

class RpcTcpPort extends Tcp
{
    use RpcTrait;

    public function onReceive(\swoole_server $server, $fd, $reactor_id, $data)
    {
        $str = $this->callRpc($data);
        $this->send($fd, $str);
    }
}