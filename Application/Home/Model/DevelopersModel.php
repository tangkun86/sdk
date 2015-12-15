<?php
/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/12
 * Time: 9:43
 */

namespace Home\Model;


class DevelopersModel extends CModel
{

    #protected $_validate = array();

    protected $_auto = array(
        array('created','gettime',1,'function'),
        array('updated','gettime',2,'function'),
    );
}