<?php
namespace app\api\controller;

use app\BaseController;
use think\facade\Db;
use  think\db\Query;

class test extends BaseController
{
    public function hell1o($name = 'ThinkPHP6')
    {
//        return 'hello,' . $name .'heheheh';
         $data = ['name' => 'thinkphp', 'status' => '1','test2'=>$name];
         return json($data);
    }
    public  function  db(){
        $result = Db::table("users")->where("id",1)->find();
        dump($result);
    }
}

