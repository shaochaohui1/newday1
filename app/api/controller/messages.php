<?php
namespace app\api\controller;

use app\BaseController;
use app\Model\UserInfo;
use app\Model\UserList;
use think\facade\Db;

class messages extends BaseController
{

    public function my_list($user_id='1')
    {
       $user= new  UserList;
       $users=$user::where("userid",$user_id)->find();
       if($users->status=0) {
           $use= [
               'status'=>'未读',
               'message'=>$users->messages_id,
           ];
           return json($use);
       }else{
           $uset=[
               'status'=>'已读',
               'messages'=>$users->messages_id,
           ];
           return  json($uset);
       }


    }
}
