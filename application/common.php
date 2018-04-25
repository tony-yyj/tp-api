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
 * @param int    $errcode
 * @param string $errmsg
 * @return \think\response\Json
 */
function generate_api_result($data, $errcode = 0, $errmsg = '')
{
    // 如果是异常数据
    if ($data instanceof \Exception) {

        $data = '';
    }

    $result = array(
        'errcode' => $errcode,
        'errmsg' => $errmsg,
        'timestamp' => time(),
        'result' => $data
    );
    return json($result);
}

function Error($errmsg, $errcode, $data = [])
{
    return generate_api_result($data, $errcode, $errmsg);
}