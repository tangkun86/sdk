<?php
/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/9
 * Time: 15:50
 */

namespace Home\Controller;


class PayCodeController extends CController
{

    public function getFeesAndTelcols(){
        $fees = M('Fees')->field('pay_code')->select();
        $telcos = M('telcos')->field('operator,name')->select();
        $this->assign('fees',$fees);
        $this->assign('telcos',$telcos);
    }

    public function add(){
        $this->getFeesAndTelcols();
        $this->display();
    }

    public function edit()
    {
        $name = CONTROLLER_NAME;
        $model = M ( $name );
        $id = $_REQUEST [$model->getPk ()];
        $vo = $model->getById ( $id );
        $this->getFeesAndTelcols();
        $this->assign ( 'vo', $vo );
        $this->display ();
    }
}