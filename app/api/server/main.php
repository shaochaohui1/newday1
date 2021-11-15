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
class main extends Model
{
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
