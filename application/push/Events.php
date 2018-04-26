<?php
/**
 * Created by PhpStorm.
 * User: ZDD
 * Date: 2018/4/22
 * Time: 12:44
 */

namespace app\push;

use GatewayWorker\Lib\Gateway;

class Events
{
    public static function onConnect($client_id)
    {
        Gateway::sendToClient($client_id, json_encode(array(
            'type' => 'init',
            'client_id' => $client_id
        )));
    }

    public  static function onMessage(){

    }

}