<?php
namespace App\Cloud;
use App\Client\RpcTcp;
use Fine\Facades\Log;
use Fine\Swoole\Client\Tcp;
class Client extends RpcTcp
{
    public function __construct($key = 'default')
    {
        $this->_id    = Log::getTraceId();
        $this->_class = Server::class;
        $this->_args  = [];
        if ($this->_connection === null) {
            $this->_connection = new Tcp($key);
        }
    }

    public function setActor()
    {
        $this->_class = Actor::class;
    }

    /**
     * @param $key
     * @return RpcTcp
     */
    public function setConnect($key)
    {
        $this->_connection->setConnection($key);
        return $this;
    }
}