<?php

namespace App\Server;

use Fine\Swoole\Listener\Http;

class AppHttpPort extends Http
{
    public function onRequest(\swoole_http_request $request, \swoole_http_response $response)
    {
        $this->httpRouter($request, $response);
    }

    public function onClose(\swoole_server $server, $fd, $reactor_id)
    {
        parent::onClose($server, $fd, $reactor_id);
    }
}
