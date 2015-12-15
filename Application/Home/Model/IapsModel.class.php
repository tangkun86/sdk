<?php
/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/14
 * Time: 15:50
 */

namespace Home\Model;


class IapsModel extends CModel
{
    protected $_auto = array(
        array('created','gettime',1,'function'),
        array('updated','gettime',2,'function'),
    );

    protected $_status = array(
        0=>'',
        1=>'上线',
        2=>'尚未提交',
        3=>'等待审批',
        4=>'审批通过',
        5=>'审批未过',
        '-1'=>'已删除',
    );
}