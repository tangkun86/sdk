<?php
/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/13
 * Time: 10:11
 */

namespace Home\Model;


class StatisticsModel extends CModel
{

    protected $_auto = array(
        array('created','gettime',1,'function'),
        array('updated','gettime',2,'function'),
    );

    protected $_status = array(
        0=>'',
        1=>'成功',
        2=>'尚未提交',
        3=>'测试',
        4=>'失败',
        5=>'待确认',
        6=>'IAP状态错误',
        7=>'计费代码错误',
        8=>'超出本月限额',
    );
}