<?php

namespace Fine\Swoole\Event;

use Fine\Database\Mysql\DbException;
use Fine\Exceptions\Handler;
use Fine\Exceptions\HttpException;
use Fine\Facades\Log;
use Fine\Http\Router;
use Fine\Http\RouterException;
use Fine\Swoole\Server;

trait HttpEvent
{
    public function onRequest(\swoole_http_request $request, \swoole_http_response $response)
    {

    }

    /**
     * @param \swoole_http_request $request
     * @param \swoole_http_response $response
     */
    protected function httpRouter(\swoole_http_request $request, \swoole_http_response $response)
    {
        $req   = new \Fine\Swoole\Request($request);
        $go_id = Log::setTraceId($req->id());
        $res   = new \Fine\Swoole\Response($req, $response);
        try {
            $router = new Router();
            $server = $this instanceof Server ? $this : $this->server;
            list($req->class, $req->method, $mids, $action, $req->args) = $router->explain($req->method(), $req->uri(), $req, $res, $server);
            $f    = $router->getExecAction($mids, $action, $res, $server);
            $data = $f();
        } catch (\Fine\Exceptions\HttpException $e) {
            $data = Handler::render($e);
        } catch (\Throwable $e) {
            error_report($e);
            $msg = $e->getMessage();
            if ($e instanceof DbException) {
                $msg = 'db error!';
            }
            $data = Handler::render(new HttpException($res, $msg, $e->getCode()));
        }
        Log::flushTraceId($go_id);
        $response->end($data);

    }
}