<?php
/**
 * Created by PhpStorm.
 * User: ZDD
 * Date: 2018/4/24
 * Time: 21:32
 */

namespace app\gateway\controller;


use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return $this->fetch('index');
    }

}