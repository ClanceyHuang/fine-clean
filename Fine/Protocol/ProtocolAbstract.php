<?php

namespace Fine\Protocol;


abstract class ProtocolAbstract
{
    /**
     * @param int $data
     * @return mixed
     */
    abstract public static function length($data);

    /**
     * @param string $buf
     * @return string
     */
    abstract public static function encode($buf);


    /**
     * @param $buf
     * @return mixed
     */
    abstract public static function decode($buf);

}