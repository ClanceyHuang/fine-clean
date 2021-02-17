<?php

namespace Fine\Swoole\Event;

trait TaskEvent
{
    public function onTask(\swoole_server $server, $task_id, $src_worker_id, $data)
    {

    }

    public function onFinish(\swoole_server $server, $task_id, $data)
    {

    }

}