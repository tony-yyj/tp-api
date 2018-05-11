<?php

namespace app\note\controller;

use app\common\controller\AuthController;

class Index extends AuthController
{
    public function index() {
        return $this->_response([]);
    }
}