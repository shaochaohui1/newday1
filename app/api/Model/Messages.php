<?php

declare (strict_types=1);

namespace app\api\Model;


use think\facade\Db;
use think\Model;

/**
 * @mixin \think\Model
 */
class Messages extends Model
{
    protected $table = 'messages';
    public   static function  UserInfo1($user_id){
         $info1=UserList::UserInfo2($user_id);

        $info2=Db::table('messages')->where('id','<>',$info1['messages_id'])->value('messages');
        $info3=Db::table('messages')->where('id',$info1['messages_id'])->value('messages');
        return [$info2,$info3];
    }


}
