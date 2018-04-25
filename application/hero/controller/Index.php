<?php
namespace app\hero\controller;

use think\Request;

class Index
{
    public function index()
    {
        $params = Request::instance()->param();
        $arr = [
         [
             "zh_name"=> "钢铁侠",
            "name"=> "Iron Man",
            "face"=> "../../assets/imgs/hero/ironman.jpeg"
          ],
          [
              "zh_name"=> "美国队长",
            "name"=> "Captain America",
            "face"=> "../../assets/imgs/hero/ironman.jpeg"
          ],
          [
              "zh_name"=> "黑寡妇",
            "name"=> "Black Widow",
            "face"=> "../../assets/imgs/hero/ironman.jpeg"
          ],
          [
              "zh_name"=> "鹰眼",
            "name"=> "Hawkeye",
            "face"=> "../../assets/imgs/hero/ironman.jpeg"
          ],
        ];
        return ["result" => ["list" => $arr]];
    }
}
