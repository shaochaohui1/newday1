<?php
namespace app\api\controller;
use app\api\Model\UserInfos;
use app\BaseController;
use app\api\server\upload;
use think\App;
use think\facade\View;
class web extends BaseController
{
    protected $request;
    public  function  messages(){
        $user_id=$this->request->param('user_id');
        $username=UserInfos::UserInfo($user_id);
        $tps=\app\api\Model\Messages::Userinfo1($user_id);
        if($username){
            $name=$username['username'];
            $text1=[
                $text3=['text'=>$tps[0],'status'=>'已读'],
                $text4=['text'=>$tps[1],'status'=>'未读'],
            ];
            View::assign('list',$name);
            View::assign('list1',array($text1));
            View::assign('list2',array($text3));
            View::assign('list3',array($text4));
            return View::fetch();
        }else{
            return 'erro';
        }
    }
    public  function  app(upload $main){
        $file = request()->file('file');
        $savename1=$main->upload($file);
        return $savename1;
    }

}