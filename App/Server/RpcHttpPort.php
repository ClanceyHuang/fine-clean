<?php

namespace App\Server;

use Fine\Swoole\Listener\Http;

class RpcHttpPort extends Http
{
    use RpcTrait;

    public function onRequest(\swoole_http_request $request, \swoole_http_response $response)
    {
        $response->header('Content-type', 'text/plain;charset=utf-8');
        $data = $request->rawContent();
        $str  = $this->callRpc($data, 1, isset($request->get['host']) ? $request->get['host'] : 'http://' . $request->header['host'] . '/', isset($request->get['prefix']) ? $request->get['prefix'] : 'Rpc');
        $response->end($str);
    }
}

