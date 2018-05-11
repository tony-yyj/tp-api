<?php

namespace app\note\controller;

use app\common\controller\AuthController;
use app\common\model\Note;

class Add extends AuthController
{
    public function index()
    {
        $params = input('post.');

        $data = [
            'uid' => session('user')['uid'],
            'content' => $params['content'],
            'priority' => $params['priority'],
            'is_todo' => $params['is_todo'],
            'start_time' => $params['start_time'],
            'end_time' => $params['end_time'],
            'is_completed' => 0,
        ];

        // 写入数据库
        $noteModle = new Note();
        if ($params['id']) {
            $result = $noteModle->where(['id' => $params['id']])->update($data);
        } else {
            $data['created'] = time();

            $result = $noteModle->insert($data);
        }
        if ($result) {
            return $this->_response([]);
        } else {
            $this->_error('数据写入错误', RETURN_CODE_ERROR);
        }

    }
}