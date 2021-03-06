<?php

namespace App\Server;


use Fine\Facades\Log;
use Fine\Swoole\RpcServer;

trait RpcTrait
{
    private function callRpc($data, $ide = 0, $host = '', $px = '')
    {
        try {
            $arr = msgpack_unpack($data);
            if (isset($arr['c'])) {
                $go_id = Log::setTraceId($arr['i'] . '.' . uuid());
                $str   = msgpack_pack(RpcServer::call($arr));
                Log::flushTraceId($go_id);
            } else if ($ide === 1) {
                $str = RpcServer::ideHelper($host, $px);
            } else {
                $str = msgpack_pack('params error');
            }
            return $str;
        } catch (\Throwable $e) {
            error_report($e);
            return msgpack_pack([
                'err' => $e->getCode(),
                'msg' => $e->getMessage()
            ]);
        }

    }
}