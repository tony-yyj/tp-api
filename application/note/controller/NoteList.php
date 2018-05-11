<?php

namespace app\note\controller;

use app\common\controller\AuthController;
use app\common\model\Note;

class NoteList extends AuthController
{
    /**
     * 返回纸条列表
     */
    public function index() {
        $noteModel = new Note();
        $result = $noteModel->order('created desc')->select();
        $count = $noteModel->count('id');
        $list = $this->formateDate($result);
        return $this->_response([
            'list' => $list,
            'count' => $count,
        ]);

    }

    /**
     * 格式化数据
     * @param $data \PDOStatement|string select出来的数据集对象
     * @return array
     */
    private function formateDate ($data) {
        $list = [];
        if (!$data) {
            return [];
        }
        // 已经在数据库设置里面将select返回的数据格式设定为了数组。
        foreach ($data as $item) {
            // 将创建的时间从秒变更为毫秒，方便前端使用
            $item['created'] .= '000';

            $list[] = $item;
        }
        return $list;
    }
}