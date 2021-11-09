<?php
namespace app\api\controller;

use app\BaseController;

class user2 extends BaseController
{
    public function hello($name = 'ThinkPHP6'): string
    {
        return 'hello,' . $name;
    }
}
