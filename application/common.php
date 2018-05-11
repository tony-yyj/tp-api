<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
/**
 * 拼凑 api 数据返回值结构
 * @param        $data
 * @param int    $code
 * @param string $msg
 * @return \think\response\Json
 */
function generate_api_result($data, $code = 0, $msg = '')
{
    // 如果是异常数据
    if ($data instanceof \Exception) {

        $data = '';
    }

    $result = array(
        'code' => $code,
        'msg' => $msg,
        'timestamp' => time(),
        'result' => $data
    );
    return json($result);
}

/**
 * 定义服务器返回的code
 */
// 未登录
const RETURN_CODE_LOGIN = 1000;
// 统一需要忽略的错误
const RETURN_CODE_ERROR = 10001;
