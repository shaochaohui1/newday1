<?php
declare (strict_types = 1);

namespace app\api\Model;

use think\Model;

/**
 * @mixin \think\Model
 */
class app1 extends Model
{
    protected $table = 'users_messages1';
    public static function my_list()
    {

        $use=1;
//        $messages= new UserInfo;

//        $users=$messages::where("user_id",$user_id)->find();
//        $info1=Db::where("user_id",$user_id)->where('status',1)->find();
//        $info2=Db::table('messages')->where('id','<>',$info1->messages_id)->value('messages');
//        $info3=Db::table('messages')->where('id',$info1->messages_id)->value('messages');
//        if($users){
//            $text=[
//                'name'=>$users->username,
//                'messages'=>([
//                    ['text'=>$info2,'status'=>'未读'],
//                    ['text'=>$info3,'status'=>'已读']
//
//                ])
//
//            ];
//            return json($text);
//
//        }else{
//
//            return 'erro';
//        }
        return  $use;
    }
}
