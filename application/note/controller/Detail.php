<?php

namespace app\note\controller;

use app\common\controller\AuthController;
use app\common\model\Note;

class Detail extends AuthController
{
    /**
     * 返回小纸条详情
     */
    public function index() {
        $id = input('post.id');
        
        $noteModel = new Note();
        
        $result = $noteModel->where(['id' => $id])->find();
        
        $info = [
            'content' => $result['content'],
            'priority' => $result['priority'],
            'is_todo' => $result['is_todo'],
            'start_time' => $result['start_time'],
            'end_time' => $result['end_time'],
        ];
        if (!$result) {
            $this->_error('没有对应纸条信息', RETURN_CODE_ERROR);
        } else {
            return $this->_response([
                'info' => $info,
            ]);
        }
    }
}