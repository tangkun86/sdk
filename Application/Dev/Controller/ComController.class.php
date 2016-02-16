<?php
/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/14
 * Time: 14:44
 */

namespace Dev\Controller;


use Think\Controller;

class ComController extends Controller
{
    public function getDevelopers()
    {
        $developers = M('Developers')
            ->alias('D')
            ->field(array('D.user_id','username','company_name'))
            ->join('users u ON D.user_id=u.id')
            ->select();
        $this->assign('developers',$developers);
    }

    public function getTelcos()
    {
        $telcos = M('telcos')->field('operator,name')->select();
        $this->assign('telcos',$telcos);
    }

    public function getApps()
    {
        $map = array('user_id'=>$_SESSION['user_id']);
        if(isset($_REQUEST['app_id'])){
            $map += array('id'=>$_REQUEST['app_id']);
        }
        $apps = M('Applications')->field('id,name,user_id,app_id,app_key,desc')->where($map)->select();
        $this->assign('apps',$apps);
    }

    public function getFees()
    {
        $fees = M('Fees')->select();
        $this->assign('fees',$fees);
    }
}