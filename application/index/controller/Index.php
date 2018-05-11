<?php
namespace app\index\controller;

use app\common\controller\AuthController;

class Index extends AuthController
{
    public function index()
    {
        return $this->_response(['status' => 3]);
    }
}
