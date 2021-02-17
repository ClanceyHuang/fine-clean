<?php

namespace Fine\Swoole\Event;

use Fine\Database\Mysql\DbException;
use Fine\Facades\Log;
use Fine\Http\Router;
use Fine\Http\RouterException;
use Fine\Protocol\TcpRouterData;

trait TcpEvent
{

    public function onConnect(\swoole_server $server, $fd, $reactor_id)
    {

    }


    public function __receive(\swoole_server $server, $fd, $reactor_id, $data)
    {
        if ($this->protocol) {
            $data = $this->protocol::decode($data);
        }
        $this->onReceive($server, $fd, $reactor_id, $data);
    }


    public function onReceive(\swoole_server $server, $fd, $reactor_id, $data)
    {


    }

    public function onBufferFull(\swoole_server $server, $fd)
    {


    }

    public function onBufferEmpty(\swoole_server $server, $fd)
    {


    }

    /**
     * @param \swoole_server $server
     * @param $fd
     * @param $reactor_id
     * @param TcpRouterData $data
     */
    protected function tcpRouter(\swoole_server $server, $fd, $reactor_id, $data)
    {
        $data->uuid = uuid();
        $data->fd   = $fd;
        $go_id      = Log::setTraceId($data->uuid);
        try {
            $router = new Router();
            $server = $this instanceof Server ? $this : $this->server;
            list($data->class, $data->method, $mids, $action, $data->args) = $router->explain('tcp', $data->url, $data, $server);
            $f   = $router->getExecAction($mids, $action, $data, $server);
            $res = $f();
        } catch (RouterException $e) {
            $res = $e->getMessage();
        } catch (\Throwable $e) {
            $res = $e->getMessage();
            if ($e instanceof DbException) {
                $res = 'db error!';
            }
            error_report($e);
        }
        Log::flushTraceId($go_id);
        if ($res) {
            $server->send($fd, $res);
        }

    }

}