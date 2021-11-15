<?php
namespace app\api\controller;
use app\api\Model\UserInfos;
use app\BaseController;
use think\App;
class messages extends BaseController
{
    protected $request;
    public  function  messages(){
          $user_id=$this->request->param('user_id');
          $username=UserInfos::UserInfo($user_id);
          $tps=\app\api\Model\Messages::Userinfo1($user_id);
        if($username){
            $text=[
                'name'=>$username['username'],
                'messages'=>([
                    ['text'=>$tps[0],'status'=>'未读'],
                    ['text'=>$tps[1],'status'=>'已读']

                ])
            ];
            return json($text);
        }
    }


}