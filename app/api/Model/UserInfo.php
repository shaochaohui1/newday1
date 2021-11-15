<?php

declare (strict_types=1);

namespace app\api\Model;


use think\Db;
use think\Model;

/**
 * @mixin \think\Model
 */
class UserInfo extends Model
{
    protected $table = 'users_info';
     public   static  function  UserInfo($user_id){
         $users= \think\facade\Db::table('users_info')->where("user_id",$user_id)->find();
         return $users;
     }



}
