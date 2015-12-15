<?php
/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/27
 * Time: 17:54
 */

namespace Dev\Controller;


class CtcclttxController extends ApiController
{
    public function uploadPayLog()
    {
        $payLog = Aviup::decrypt($_REQUEST['test']);
        $log_data = array(
            'title'=>'TEST',
            'content'=>$payLog,
            'created'=>$_SERVER['REQUEST_TIME'],
        );
        $log_model = M('Logs');
        $log_model->add($log_data);
        $params = json_decode($payLog,true);
        //作请求验证
        //验证
        $res = $this->validateRequest($params);
        //写逻辑 存入计费表
        $sid = writeStat($params);
        $res['extra'] = $sid;
        //获取code
        $code = $this->getMncCode($res);
//        $code = $this->getMncCode();
        return $code;
    }
}