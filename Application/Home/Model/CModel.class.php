<?php
/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/10
 * Time: 11:58
 */

namespace Home\Model;


use Think\Model;

class CModel extends Model
{
    protected function gettime()
    {
        return $_SERVER['REQUEST_TIME'];
    }

    public function _after_select(&$resultSet,$options) {
        if(isset($this->_status)){
            foreach($resultSet as $k=>$v){
                $resultSet[$k]['status_transfer'] = $this->_status[$v['status']];
            }
        }
    }
}