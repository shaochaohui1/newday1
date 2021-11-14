<?php
namespace app\api\controller;
use app\api\Model\app1;
use app\BaseController;
use think\App;
use think\facade\View;
class messages extends BaseController
{
    protected $request;
    public function  messages( app1  $app1  ){
          $user_id=$this->request->param('user_id');
          $tps=$app1->my_list($user_id);
          if($tps[0]){
             $name=$tps[0]->username;
              $text1=[
                 $text3=['text'=>$tps[1],'status'=>'已读'],
                 $text4=['text'=>$tps[2],'status'=>'未读'],
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
    public  function  app(app1  $app1 ){
        $file = request()->file('file');
        $savename1=$app1->upload($file);
        return $savename1;
    }

}