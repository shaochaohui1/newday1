<?php
namespace app\api\controller;

use app\BaseController;
use app\Model\UserInfo;
;

class user extends BaseController
{
    public function my_list($user_id='1111')
    {
        $user= new  UserInfo;
        $users=$user::where("userid",$user_id)->find()->toArray();
        echo $users;
    }
}
