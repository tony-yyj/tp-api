<?php
namespace app\common\controller;

use think\Session;
use think\Request;

class AuthController extends ABSController
{

    public function __construct(Request $request = null)
    {
        parent::__construct($request);


        if ($this->checkLogin()) {
            $this->_error('请登录', RETURN_CODE_LOGIN);
        }
    }

    /**
     * 检查是否登录
     * @return bool
     */
    public function checkLogin() {
        if (Session::get('user')) {
            return false;
        } else {
            return true;
        }
    }
}

