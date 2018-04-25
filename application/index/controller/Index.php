<?php
namespace app\index\controller;

use app\common\controller\ABSController;

class Index extends ABSController
{
    public function index()
    {
        return $this->_response([
            'id' => 1,
            'errcode' => 1000,
            'errmsg' => '请登录',
            ]);
    }
}
