<?php
/**
 * Created by PhpStorm.
 * User: tangk
 * Date: 2016/1/26
 * Time: 11:17
 */

namespace Dev\Controller;

use Api\Lib\Aviup;
use Think\Controller;

class ToolsController extends Controller
{
    public function debug()
    {
        if(IS_POST){
            $msg = [];
            $msg['str'] = $_POST['str'];
            $dec = Aviup::decrypt($msg['str']);
            $msg['dec'] = json_decode($dec,true);
            $this->assign('msg',$msg);
        }
        $this->display();
    }
}