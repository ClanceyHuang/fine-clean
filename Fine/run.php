<?php
if (!defined('_APP_PATH_')) {
    exit('Please define the project path with _APP_PATH_');
}
define('_START_TIME_', microtime(true));

define('_CLI_', defined('_SHELL_') === false && php_sapi_name() === 'cli' && class_exists('\Swoole\Coroutine'));

if (!defined('_DEBUG_')) {
    define('_DEBUG_', false);
}

define('_Fine_V_', '1.0.0');

// spl_autoload_register(function ($name) {
//     // echo "Want to load $name.\n";
//     throw new Exception("Unable to load $name.");
// });

// try {
//     $obj = new NonLoadableClass();
// } catch (Exception $e) {
//     echo $e->getMessage(), "\n";
// }

require __DIR__ . '/helper.php';
