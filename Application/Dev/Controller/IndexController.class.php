<?php

namespace Dev\Controller;

use Api\Lib\Aviup;
use Think\Controller;

class IndexController extends CController {

    public function index(){
        $uid = $_SESSION['user_id'];
        $user = M('Users')->where(array('user_id'=>$uid))->find();
        $developers = M('Developers')->where(array('user_id'=>$uid))->find();
        $apps = M('Applications')->where(array('user_id'=>$uid,'status'=>array('neq',0)))->order('id desc')->limit('0,5')->select();
        $field = array('SUM(fee) as total', 'S.application_id', 'A.name');
        $join = 'applications A on S.application_id=A.id';
        $condition = array('S.user_id=1 and S.status=1');
        $statistic = M('Statistics')->alias('S')->field($field)->join($join)->where($condition)->group('S.application_id')->select();
        $this->assign('user',$user);
        $this->assign('developers',$developers);
        $this->assign('apps',$apps);
        $this->assign('statistic',$statistic);
        $this->display();
    }

    /*public function addp()
    {
        echo md5('aviup'.makeSecType());
    }*/
}