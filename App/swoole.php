<?php
/**
 * swoole 运行这个文件
 * php swoole.php
 */

define('_ROOT_PATH_', dirname(dirname(__FILE__)));
define('_APP_PATH_', __DIR__);
define('_APP_PATH_VIEW_', __DIR__ . '/View');
define('_APP_PATH_PUBLIC_', __DIR__ . '/Public');

//define('_DEBUG_',true);

require(_ROOT_PATH_ . '/vendor/autoload.php');
require(_ROOT_PATH_ . '/Fine/run.php');
require(_APP_PATH_ . '/config.php');

\Swoole\Runtime::enableCoroutine();
\Fine\Swoole\FineServer::runAll();



