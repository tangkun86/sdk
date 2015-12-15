<?php
/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/13
 * Time: 9:42
 */

namespace Admin\Model;


class ClientInfosModel extends CModel
{
    protected $_auto = array(
        array('created','gettime',1,'function'),
        array('updated','gettime',2,'function'),
    );

    protected $_status = array(
        '',
        'SUC'=>'成功',
        'TOT'=>'失败'
    );
}