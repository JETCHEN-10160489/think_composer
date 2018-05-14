<?php
namespace app\index\controller;

use app\common\controller\Index as commonIndex;//起别名
use app\common\controller\User;

class Index
{
    public function index()
    {
        $common = new commonIndex();
        $user = new User();
        var_dump(config());exit;
        return 'common Index: '.$common->index()."<br/>".'common User: '.$user->getUserName('lisi');
    }

}

