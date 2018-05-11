<?php

namespace app\login\controller;

use app\common\controller\AuthController;

class LoginOut extends AuthController
{
    public function index()
    {
        return $this->_response(['name' => 'tony']);
    }
}