<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
define('_APP_PATH_', __DIR__);
define('_APP_PATH_VIEW_', __DIR__ . '/View');
define('__APP_PATH_PUBLIC__', __DIR__ . '/Public');

require _APP_PATH_ . '/../vendor/autoload.php';
require _APP_PATH_. '/../Fine/run.php';
require _APP_PATH_ . '/config.php';

try {
    \Fine\Http\Router::loadRouter();
    $req = new \Fine\Http\Request();
    $res = new \Fine\Http\Response($req);

    $router = new \Fine\Http\Router();
    list($req->class, $req->method, $mids, $action, $req->args) = $router->explain($req->method(), $req->uri(), $req, $res);
    $f = $router->getExecAction($mids, $action, $res);
    echo $f();
} catch (\Fine\Exceptions\HttpException $e) {
    echo (new \Fine\Exceptions\Handler())->render($e);
} catch (\Fine\Http\RouterException $e) {
    echo \Fine\Exceptions\Handler::render(new \Fine\Exceptions\HttpException($res, $e->getMessage(), $e->getCode()));
} catch (Exception $e) {
    echo $e->getMessage();
    \Fine\Facades\Log::warn($e);
}

