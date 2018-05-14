<?php
/**
 * Created by PhpStorm.
 * User: JeffhasChen
 * Date: 2018/5/14
 * Time: 16:52
 */

namespace app\common\controller;

class User
{
    public function getUserName($name='zhangsan'){
        return "Hello {$name}";
    }

}