<?php
/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/14
 * Time: 15:50
 */

namespace Dev\Model;


class IapsModel extends CModel
{
    protected $_validate = array(
        array('name','require','name必须'),
        array('pay_code','require','pay_code必须'),
        array('application_id','require','application_id必须'),
        array('position_desc','require','position_desc必须'),
        array('trigger_desc','require','trigger_desc必须'),
    );

    protected $_auto = array(
        array('iap_key','Key16Code',1,'function'),
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