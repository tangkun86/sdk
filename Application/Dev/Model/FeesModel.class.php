<?php

/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/10
 * Time: 10:07
 */
namespace Dev\Model;


class FeesModel extends CModel
{

    protected $_validate = array(
        array('description','require','描述不能为空！'), //默认情况下用正则进行验证
        array('pay_code','require','pay_code必须且唯一！',0,'unique',1), // 在新增的时候验证pay_code字段是否唯一
    );

    protected $_auto = array (
        array('created','gettime',1,'function'), // 对created字段在新增的时候写入当前时间戳
        array('updated','gettime',2,'function'), // 对updated字段在更新的时候写入当前时间戳
    );

    protected $_status = array(
        0=>'default',
        1=>'上线',
        2=>'下线',
    );
}