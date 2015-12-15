<?php
/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/10
 * Time: 10:08
 */

namespace Dev\Model;



class UsersModel extends CModel
{
    protected $_validate = array(
        array('username','require','帐号不能为空'),
        array('username','','帐号名称已经存在！',0,'unique',1),
        array('username','/[a-zA-Z0-9_]{6,20}/ ','帐号不合法！',0,'regex',1),
        array('email','require','邮箱不能为空'),
        array('email','','邮箱已被占用!',0,'unique',1),
        array('email','/^(\w)+(\.\w+)*@(\w)+((\.\w+)+)$/','邮箱格式不正确!',0,'regex',1),
        array('password','require','密码不能为空'),
        array('repassword','password','确认密码不正确',0,'confirm'),
    );

    protected $_auto = array(
        array('created','gettime',1,'function'),
        array('last_login','gettime',2,'function'),
    );

    protected function _before_insert(&$data,$options)
    {
        $data['password'] = md5($data['password'].makeSecType());
    }

    protected function _after_insert($data,$options)
    {
        $developer = array(
            'user_id'=>$data['id'],
            'status' =>2,
            'created' =>$this->gettime(),
        );
        $model = D('Developers');
        if(false===$model->create($developer)){
            $this->error = $model->getError ();
            return false;
        }
        $res = $model->add();
        return $res;
    }
}