<?php
/**
 * Created by PhpStorm.
 * User: tangk
 * Date: 2015/12/9
 * Time: 14:12
 */

namespace Home\Controller;


use Think\Controller\HproseController;

class ServerController extends HproseController
{
    protected $crossDomain =    true;
    protected $P3P         =    true;
    protected $get         =    true;
    protected $debug       =    true;

    public function test()
    {
        $model = M('Users');
        $res = $model->where(['id'=>['lt',5]])->select();
        return $res;
    }

    public function test1()
    {
        return 'test1';
    }

    public function test2()
    {
        return 'test2';
    }
}