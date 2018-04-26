<?php

namespace app\gateway\controller;

use GatewayClient\Gateway;


class Message
{
    public function onMessage($client_id, $message = '')
    {
        Gateway::$registerAddress = '127.0.0.1:1236';
        Gateway::sendToClient($client_id, json_encode(array(
            'type' => 'connect',
            'client_id' => $client_id
        )));
    }
}