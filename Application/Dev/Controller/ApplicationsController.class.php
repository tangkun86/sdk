<?php
/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/12
 * Time: 16:16
 */

namespace Dev\Controller;


class ApplicationsController extends CController
{

    public function index(){
        $_REQUEST['user_id'] = 1;
        parent::index();
    }

    public function viewIap()
    {
        $iap = (object) M('Iaps')->where(array('id'=>(int)$_REQUEST['id']))->find();
        $app = (object) M('Applications')->where(array('id'=>$iap->application_id))->find();
        $this->assign('iap',$iap);
        $this->assign('app',$app);
        $this->display();
    }

    public function view(){
        $map = $this->_filter();
        $iaps = D('Iaps')->where($map)->select();
        $app = (object)M('Applications')->where(array('id'=>$map['application_id']))->find();
        $this->assign('iaps',$iaps);
        $this->assign('app',$app);
        $this->display();
    }

}