<?php
/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/14
 * Time: 14:44
 */

namespace Admin\Controller;


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

    public function getApps(){
        $apps = M('Applications')->field('id,name')->select();
        $this->assign('apps',$apps);
    }
}