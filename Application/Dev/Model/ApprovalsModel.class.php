<?php
/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/12
 * Time: 14:12
 */

namespace Dev\Model;


class ApprovalsModel extends CModel
{

    protected $_validate = array(
        array('message','require','message必须！'),
    );

    protected $_auto = array(
        array('created','gettime',1,'function'),
        array('updated','gettime',2,'function'),
    );

}