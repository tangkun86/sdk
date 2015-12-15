<?php
/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/12
 * Time: 9:43
 */

namespace Dev\Model;


class DevelopersModel extends CModel
{

    #protected $_validate = array();

    protected $_auto = array(
        array('created','gettime',1,'function'),
        array('updated','gettime',2,'function'),
    );

    protected $_status = array(
        0=>'',
        1=>'正常',
        2=>'尚未提交',
        3=>'邮件已验证',
        4=>'等待审批',
        5=>'审批未过',
    );
}