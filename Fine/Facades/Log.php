<?php

namespace Fine\Facades;

/**
 * Class Log
 * @package Fine\Facades
 * @mixin \Fine\Log
 * @method  debug($data, $k = 0, $prefix = 'debug') static
 * @method  notice($data, $k = 0, $prefix = 'notice') static
 * @method  warn($data, $k = 0, $prefix = 'warn') static
 * @method  error($data, $k = 0, $prefix = 'error') static
 * @method  setTraceId($id) static
 * @method  bindTraceId($id) static
 * @method  flushTraceId($go_id) static
 * @method  getTraceId() static
 *
 */
class Log extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Fine\Log::class;
    }
}