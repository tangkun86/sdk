<?php
/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/8
 * Time: 15:10
 */

namespace Dev\Controller;


class UsersController extends CController
{

    public function loginDev()
    {
        #var_dump($_SESSION);exit;
        if(IS_POST){
            $this->checkLogin();
        }
        $this->display();
    }

    public function checkLogin()
    {
//        C('TMPL_ACTION_ERROR','Users:loginDev');
        $user = D('Users')->where(array('username'=>$_POST['username']))->find();
        if(!$user || md5($_POST['password'].makeSecType())!==$user['password']){
//            $msg = '登录信息错误，请核对用户名和密码。';
//            L('ifpay_dev_login_errors','登录信息错误，请核对用户名和密码。');
            $msg = L('ifpay_dev_login_errors');
            $this->error($msg);
        }else{
            $_SESSION['dev'] = $user;
            $dev = M('Developers')->where(array('user_id'=>$user['id']))->find();
            if($dev['status']==5 || $dev['status']==2){
                $this->redirect('Users/improve');
            }
            if($dev['status']==4){
                $this->redirect('Users/wait');
            }
            $this->redirect('Index/index');
        }
    }

    public function logout()
    {
        unset($_SESSION);
        session_destroy();
        $this->redirect('Users:loginDev');
    }

    public function register()
    {
        if(IS_POST){
            $this->insert();
        }
        $this->display();
    }

    public function improve()
    {
        $this->display();
    }

    public function wait()
    {
        $dev = (object)M('Developers')->where(array('user_id'=>$_SESSION['user_id']))->find();
        $this->assign('dev',$dev);
        $this->display();
    }

    public function insert()
    {
        C('TMPL_ACTION_ERROR','Users:register');
        $name = CONTROLLER_NAME;
        $model = D ($name);
        if (false === $model->create ()) {
            $this->error( $model->getError () );
        }
        //保存当前数据对象
        $list=$model->add ();
        if ($list!==false) { //保存成功
            $this->redirect($name.'/improve');
        } else {
            //失败提示
            $this->error($model->getError());
        }
    }

    public function setting()
    {
        if(IS_POST){
            $empty = (empty($_POST['old_password']) or empty($_POST['password']) or empty($_POST['repassword']));
            $empty && ($msg = L('password_not_empty'));
            $repassword_match = ($_POST['password']!==$_POST['repassword']);
            $repassword_match && $msg = L('repassword_not_match');
            if(!$empty && !$repassword_match){
                $model = D('Users');
                $uid = $_SESSION['user_id'];
                $condition = ['id'=>$uid];
                $old_password = $model->where($condition)->getField('password');
                if($old_password!==md5($_POST['old_password'].makeSecType())){
                    $msg = L('confirm_password');
                }else{
                    $res = $model->where($condition)->save(['password'=>md5($_POST['password'].makeSecType())]);
                    if($res!==false){
                        $this->redirect('Index/index');
                    }else{
                        $msg = L($model->getError());
                    }
                }
            }
            $this->error($msg);
        }
        $this->display();
    }

}