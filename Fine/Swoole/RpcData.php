<?php

namespace Fine\Swoole;


class RpcData
{
    public $data;

    public $obj;

    public function __construct($obj, $d)
    {
        $this->obj  = $obj;
        $this->data = $d;
    }
}