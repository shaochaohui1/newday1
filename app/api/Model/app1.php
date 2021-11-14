<?php
declare (strict_types = 1);
namespace app\api\Model;
use think\App;
use think\facade\Db;
use think\facade\Filesystem;
use think\Model;

/**
 * @mixin \think\Model
 */
class app1 extends Model
{
    protected  $user;
    protected $messages;
    protected $list;
    public  function  __construct(UserInfo $user, UserList $messages, Messages $list)
    {
        parent::__construct();
        $this->user=$user;
        $this->messages=$messages;
        $this->list=$list;
    }
    public  function my_list($user_id): array
    {
        $users=$this->user::where("user_id",$user_id)->find();
        $info1=$this->messages::where("user_id",$user_id)->where('status',1)->find();
        $info2=$this->list::where('id','<>',$info1->messages_id)->value('messages');
        $info3=$this->list::where('id',$info1->messages_id)->value('messages');
        return [$users,$info2,$info3];
    }
    public function upload($file)
    {
        $temp = explode(".", $_FILES["file"]["name"]);
        $extension = end($temp);
        if(!in_array($extension, array("jpeg","jpg","png"))){
            return  'this is a bad';
        }
        $savename =Filesystem::disk('public')->putFile( '', $file);
        $arr = ['username' => 'zhangsan' , 'url' => $savename];
        Db::table('photos')->save($arr);
        return $savename;
    }

}
