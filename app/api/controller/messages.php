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
       $messages= new UserInfo;
       $users=$messages::where("user_id",$user_id)->find();
       $info1=$user::where("user_id",$user_id)->where('status',1)->find();
       $info2=Db::table('messages')->where('id','<>',$info1->messages_id)->value('messages');
       $info3=Db::table('messages')->where('id',$info1->messages_id)->value('messages');
       if($users){
           $text=[
               'name'=>$users->username,
               'messages'=>([
                    ['text'=>$info2,'status'=>'未读'],
                   ['text'=>$info3,'status'=>'已读']

               ])

           ];
           return json($text);

       }

    }
}
