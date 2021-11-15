<?php
namespace app\api\Model;


use think\facade\Db;
use think\Model;

class UserList extends Model
{
    protected $table = 'users_messages1';
    public  static function  UserInfo2($user_id){
        $info1=Db::table('users_messages1')->where("user_id",$user_id)->where('status',1)->find();
        return $info1;
    }



}