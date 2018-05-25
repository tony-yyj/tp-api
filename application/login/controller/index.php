<?php
namespace app\login\controller;

use app\common\controller\ABSController;
use app\common\model\User;

use think\Log;
use think\Session;


class Index extends ABSController
{
    public function index()
    {
        $name = input('post.name');
        $password = input('post.password');

        if (!$name || !$password) {
            $this->_error('请输入登录信息', RETURN_CODE_ERROR);
        }
        $condition = [
            'name' => $name,
            'password' => md5($password),
        ];
        $userModle = new User();
        $user = $userModle->where($condition)->find();
        if (empty($user)) {
            $this->_error('用户名或密码错误，请重新登录', RETURN_CODE_ERROR);
        } else {
            Session::set('user', $user);
            return $this->_response($user);
        }
    }
}
