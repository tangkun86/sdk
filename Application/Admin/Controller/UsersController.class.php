<?php
/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/8
 * Time: 15:10
 */

namespace Admin\Controller;


class UsersController extends CController
{

    public function loginAdmin()
    {
        if(IS_POST){
            $this->checkLogin();
        }
        $this->display();
    }

    public function checkLogin()
    {
        C('TMPL_ACTION_ERROR','Users:loginAdmin');
        $user = D('Users')->where(array('username'=>$_POST['username']))->find();
        if(!$user || $_POST['username']!=='admin' || md5($_POST['password'].makeSecType())!==$user['password']){
            $msg = '登录信息错误，请核对用户名和密码。';
            $this->error($msg);
        }else{
            $_SESSION['admin'] = $user;
            $this->redirect('Admin/index');
        }
    }
}