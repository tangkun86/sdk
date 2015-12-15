<?php
/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/10
 * Time: 12:24
 */

namespace Home\Model;


class PayCodeModel extends CModel
{

    protected $_validate = array(
        array('service_code','require','service_code必须！'),
        array('target','require','target必须！'),
        array('code','require','code必须！'),
        array('fee','require','fee必须！'),
        array('local','require','local必须！'),
        array('local_fee','require','local_fee必须！'),
        array('local_unit','require','local_unit必须！'),
        array('version','require','version必须！'),
    );

    protected $_auto = array(
        array('created','gettime',1,'function'),
        array('updated','gettime',2,'function'),
    );

}