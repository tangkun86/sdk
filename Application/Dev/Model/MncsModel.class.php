<?php
/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/10
 * Time: 15:28
 */

namespace Dev\Model;


class MncsModel extends CModel
{

    protected $_validate = array(
        array('mnc','require','mnc必须！'),
        array('operator','require','operator必须！'),
    );

    protected $_auto = array(
        array('created','gettime',1,'function'),
        array('updated','gettime',2,'function'),
    );
}