<?php

namespace Fine\Cache;

abstract class Cache
{
    abstract public function get($key, \Closure $closure = null, $ttl = 0, $tags = []);

    abstract public function delRegex($key);

    abstract public function flush($tag);

    abstract public function set($key, $val, $ttl = 0, $tags = []);

    abstract public function del($key);


}