<?php

namespace app\note\controller;

use app\common\controller\AuthController;
use app\common\model\Note;

class Delete extends AuthController
{
    public function index() {
        $id = input('post.id');

        if (!$id) {
            return $this->_error('id不可为空', RETURN_CODE_ERROR);
        }

        // 删除
        $noteModel = new Note();
        $result = $noteModel->where(['id' => $id])->delete();
        if (!$result) {
            return $this->_error('删除失败', RETURN_CODE_ERROR);
        }

        return $this->_response([]);
    }
}