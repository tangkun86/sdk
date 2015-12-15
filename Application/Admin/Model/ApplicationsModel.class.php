<?php
/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/12
 * Time: 16:17
 */

namespace Admin\Model;


class ApplicationsModel extends CModel
{
    protected $_auto = array(
        array('created','gettime',1,'function'),
        array('updated','gettime',2,'function'),
    );

    protected function _after_insert($data,$options) {
        $this->where(array('id'=>$data['id']))->setField(array(
            'app_id'=>str_pad($data['id'],8,0,STR_PAD_LEFT),
            'app_key'=>md5($_SERVER['REQUEST_TIME'].$data['id']),
        ));
    }

    protected $_status = array(
        0=>'',
        1=>'等待审批',
        2=>'待测试',
        3=>'上线',
        4=>'尚未提交',
        5=>'审批通过',
        6=>'审批未过',
        7=>'测试通过',
        8=>'测试未过',
        9=>'已删除',
    );
}