<?php
namespace app\common\controller;

use think\Controller;;
use think\Session;
use think\Request;
class ABSController extends Controller
{

    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        if ($this->checkLogin()) {
            $this->error('请登录');
        }
    }

    /**
     * 请求响应结果
     * @param array $data
     * @return \think\response\Json
     */
    public function _response($data = [])
    {
        return generate_api_result($data);
    }

    /**
     * 检查是否登录
     * @return bool
     */
    public function checkLogin() {
        if (Session::get('admin')) {
            return false;
        } else {
            return true;
        }
    }
}

