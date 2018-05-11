<?php
namespace app\common\controller;

use think\Controller;
use think\Request;
class ABSController extends Controller
{

    public function __construct(Request $request = null)
    {
        parent::__construct($request);
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

    public function _error($msg, $code) {
        $this->error($msg, $code);
    }
}

