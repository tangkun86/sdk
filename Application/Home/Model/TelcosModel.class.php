<?php
/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/10
 * Time: 14:56
 */

namespace Home\Model;


class TelcosModel extends CModel
{

    protected $_validate = array(
        array('name','require','name必须！'),
        array('operator','require','operator必须！'),
        array('country','require','country必须！'),
        array('code','require','code必须！'),
    );

    protected $_auto = array(
        array('created','gettime',1,'function'),
        array('updated','gettime',2,'function'),
    );
}