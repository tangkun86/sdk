<?php
/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/15
 * Time: 15:03
 */

namespace Home\Controller;


use Think\Controller;

class EmptyController extends Controller
{

    public function _empty(){
        header('Content-type:text/html;charset=utf8');
        die('未知的控制器！');
    }
}
