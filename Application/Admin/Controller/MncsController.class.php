<?php
/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/10
 * Time: 15:27
 */

namespace Admin\Controller;


class MncsController extends CController
{

    public function getTelcos()
    {
        $telcos = M('telcos')->field('operator,name')->select();
        $this->assign('telcos',$telcos);
    }

    public function add()
    {
        $this->getTelcos();
        $this->display();
    }

    public function edit()
    {
        $name = CONTROLLER_NAME;
        $model = M ( $name );
        $id = $_REQUEST [$model->getPk ()];
        $vo = $model->getById ( $id );
        $this->getTelcos();
        $this->assign ( 'vo', $vo );
        $this->display ();
    }

}