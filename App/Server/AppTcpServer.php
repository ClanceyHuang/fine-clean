<?php
/**
 * 带路由Tcp
 */

namespace App\Server;

use Fine\Protocol\TcpRouterData;
use Fine\Swoole\Server\TcpServer;

class AppTcpServer extends TcpServer
{

    /**
     * @param \swoole_server $server
     * @param $fd
     * @param $reactor_id
     * @param TcpRouterData $data
     */
    public function onReceive(\swoole_server $server, $fd, $reactor_id, $data)
    {
        $this->tcpRouter($server,$fd,$reactor_id,$data);
    }
}