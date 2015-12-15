<?php
/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/28
 * Time: 12:23
 */

namespace Dev\Controller;

use Think\Controller;

class ApicomController extends Controller
{
    public function generateOrder($params)
    {
        $log_model = M('Logs');
        $iap_model = M('Iaps');
        $pay_code_model = M('PayCode');
        $statistics_model = M('Statistics');
        $iap = $iap_model->where(array('iap_key'=>$params['iap_id']))->find();

        if($iap===false){
            $log_model->add(array(
                'title'=>'iaps_error',
                'content'=>$iap_model->getError(),
                'created'=>TIME,
            ));
        }

        $paycode = $pay_code_model->where(array('pay_code'=>$iap['pay_code']))->find();
        if($iap===false){
            $log_model->add(array(
                'title'=>'pay_code_error',
                'content'=>$pay_code_model->getError(),
                'created'=>TIME,
            ));
        }
        $order_data = array(
            'user_id'=>$iap['user_id'],
            'iap_id'=>$iap['id'],
            'application_id'=>$iap['application_id'],
            'mobile'=>isset($params['mobile']) ? $params['mobile'] : '',
            'telco'=>isset($params['telco']) ? $params['telco'] : '',
            'operator'=>$params['mnc'],
            'pay_code'=>$iap['pay_code'],
            'service_code'=>$paycode['service_code'],
            'fee'=>$paycode['fee'],
            'local_fee'=>$paycode['local_fee'],
            'local_unit'=>$paycode['local_unit'],
            'local_time'=>date('YmdHis',TIME),
            'created'=>TIME,
            'status'=>5,
            'ip'=>$params['ip'],
            'macaddress'=>$params['macaddress'],
            'appversion'=>$params['appversion'],
            'imei'=>$params['imei'],
            'imsi'=>$params['imsi'],
            'appversionname'=>$params['appversionname'],
            'apppackagename'=>$params['apppackagename'],
            'order_key'=>'jfwx'.guid(),
        );
        $row = $statistics_model->add($order_data);
        if($row!==false){
            $order_data['id'] = $row;
            $order_data['app_name'] = $params['app_name'];
            $order_data['iap_name'] = $iap['name'];
            return $order_data;
        }else{
            $log_model->add(array(
                'title'=>'staticstics_error',
                'content'=>$statistics_model->getError(),
                'created'=>TIME,
            ));
            return false;
        }
    }
}