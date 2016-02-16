<?php
/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/23
 * Time: 10:43
 */

namespace Dev\Controller;


use Api\Lib\Aviup;
use Api\Lib\MNC;
use Think\Controller;

class ApiController extends Controller
{

    public function test($str='')
    {
//        $str = "8f1129ab785fb82161a96a6b8f316e5048527d1eff8d55802c98541c8479e705f72bb3996e83823750e4cba5a22e9982de1403615ae78e8c1b8644f50ed1d46e";
        $a = Aviup::decrypt($str);
        $a = json_decode($a,true);
        var_dump($a);
    }

    public function _initialize()
    {
        //验证请求
        if(!$this->validateReq()){
            $this->catchMsg('无效的请求');
        }
    }

    public function prepay()
    {
        //SDK请求的参数
        $req_params = $_REQUEST['sdk_req_params'];

        //验证
        $sign_str = $req_params['app_id'].$req_params['iap_id'].$req_params['mnc'].$req_params['macaddress'].$req_params['imsi'].$req_params['imei'].$req_params['timestamp'];
//        var_dump($sign_str);exit;
        $str_sign = md5($sign_str);

        if(strtolower($str_sign)!=strtolower($req_params['sign'])){
            $this->catchMsg('参数校验错误');
        }

        //验证计费点信息，返回所需计费点相关参数
        $iapInfo = $this->validateIapInfo($req_params);

        //合并参数
        $req_iap_params = $req_params+$iapInfo;
        $mncConfObject = new MNC();

        //选择运营商走各自的计费支付流程
        $mnc = array(
            '46000'=>'CMCC',//移动
            '46001'=>'CUCC',//联通
            '46002'=>'CMCC',//移动
            '46003'=>'CTCC',//电信
            '46005'=>'CTCC',//电信
            '46006'=>'CUCC',//联通
            '46007'=>'CMCC',//移动
            '46011'=>'CTCC',//电信
            '46020'=>'CRC',//铁通
        );

        switch($mnc[$req_params['mnc']]){
            case 'CRC':
                break;
            case 'CMCC':
                break;
            case 'CUCC':
                $params = $mncConfObject->cucc_config + $req_iap_params;
                R('Unicom/applyOrder',array('params'=>$params));
                break;
            case 'CTCC':
                $params = $mncConfObject->ctcc_config + $req_iap_params;
                R('Ctcclttx/applyOrder',array('params'=>$params));
                break;
            default:
                return;
        }
    }

    /**
     * @return bool
     */
    public function validateReq()
    {
//         $_REQUEST['apply_pay'] = Aviup::encrypt('{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_id":"00100016T00002","mnc":"46001","ip":"192.168.137.104","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo","timestamp":"1234567890","sign":"23d9de85f47b69d647dbae33f3242972","gameaccount":"游戏aaa账号@$%#"}');
        //$_REQUEST['get_order_result'] = Aviup::encrypt('{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","timestamp":"1234567890","sign":"4c6eab6028de8fde534392b879352f3a","order_id":"1"}');
        //$_REQUEST['upload_app_info'] = Aviup::encrypt('{"app_id":"16","app_key":"44e1e47caa2e5e40","mnc":"46001","ip":"192.168.137.221","macaddress":"e4:90:7e:af:f0:d7","imsi":"460018172638740","imei":"89860112881011714846","appversion":1,"appversionname":"1.0","apppackagename":"com.example.demo","recordid":"","timestamp":"1451382760","sign":"06429e145b7e89ec6cb73c50f9db251e"}');
        if(isset($_REQUEST['upload_app_info'])){
            M('Logs')->add(array(
                'created'=>TIME,
                'title'=>'accept_params_infos',
                'content'=>Aviup::decrypt($_REQUEST['upload_app_info']),
            ));
        }


        switch(ACTION_NAME){
            case 'prepay':
                $req = isset($_REQUEST['apply_pay']) ? $_REQUEST['apply_pay'] : false;
                break;
            case 'check_charge_result':
                $req = isset($_REQUEST['get_order_result']) ? $_REQUEST['get_order_result'] : false;
                break;
            case 'upload_app_info':
                $req = isset($_REQUEST['upload_app_info']) ? $_REQUEST['upload_app_info'] : false;
                break;
            default:
                $req = false;
        }

        if($req===false){
            return false;
        }else{
            $req_data = Aviup::decrypt($req);
            if(!$req_data){
                $this->catchMsg('解密错误');
            }
            $_REQUEST['sdk_req_params'] = array('dialog_msg' => Aviup::$dialog_msg) + json_decode($req_data,true);
//            var_dump($_REQUEST['sdk_req_params']);exit;
        }

        return true;
    }


    /**
     * @param string $str
     * @param int $order_id
     * @return bool
     */
    public function catchMsg($str='error',$order_id='')
    {
        $this->ajaxReturn(array(
            'status'=>1,
            'msg'=>Aviup::encrypt(json_encode(array(
                'order_id'=>$order_id,
                'errordescription'=>$str
            ),JSON_UNESCAPED_UNICODE))
        ),'JSON',JSON_UNESCAPED_UNICODE);
        return true;
    }

    /**
     * @param object $model
     * @param array $data
     * @param string $error
     * @return bool
     */
    public function returnError($model,$data,$error){
        $data['fail_reason'] = $error;
        $id = $model->add($data);
        $msg = array(
            'errordescription'=>$error,
            'order_id'=>$id
        );
        $msg = Aviup::encrypt(json_encode($msg,JSON_UNESCAPED_UNICODE));
        $this->ajaxReturn(array(
            'status'=>1,
            'msg'=>$msg,
        ),'JSON',JSON_UNESCAPED_UNICODE);
        return true;
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function validateIapInfo($params){

        $order_data = array(
            'operator'   => $params['mnc'],
            'local_time' => date('YmdHis',TIME),
            'created'    => TIME,
            'ip'         => $params['ip'],
            'macaddress' => $params['macaddress'],
            'appversion' => $params['appversion'],
            'imei'       => $params['imei'],
            'imsi'       => $params['imsi'],
            'appversionname' => $params['appversionname'],
            'apppackagename' => $params['apppackagename'],
            'gameaccount'    => !isset($params['gameaccount'])?'novalue':$params['gameaccount'],
        );

        $order = M('Statistics');
        $operator= M('Mncs')->where(array('mnc'=>$params['mnc']))->getField('operator');
        if(!$operator){
            $this->returnError($order,$order_data,'计费通道错误或不存在');
        }

        $app = M('Applications')->where(array('status'=>3,'id'=>$params['app_id'],'app_key'=>$params['app_key']))->find();
        if(!$app){
            $this->returnError($order,$order_data,'计费应用未上线');
        }

        if(!M('Iaps')->where(array('application_id'=>$params['app_id'],'iap_key'=>$params['iap_id']))->getField('id')){
            $this->returnError($order,$order_data,'计费点应用对应错误');
        }

        $iap = M('Iaps')->where(array('status'=>1,'iap_key'=>$params['iap_id']))->find();
        if(!$iap){
            $this->returnError($order,$order_data,'计费点未上线');
        }

        $fee = M('Fees')->where(array('status'=>1,'pay_code'=>$iap['pay_code']))->find();
        if(!$fee){
            $this->returnError($order,$order_data,'计费通道未上线');
        }

        $payCode = M('PayCode')->where(array('pay_code'=>$iap['pay_code'],'operator'=>$operator))->find();
        if(!$payCode){
            $this->returnError($order,$order_data,'不在计费范围');
        }

        $params['app_name'] = $app['name'];
        $params['iap_name'] = $iap['name'];
        $params['fee'] = $payCode['fee'];

        //返回相关数据
        return $params;
    }

    /**
     * @return bool
     */
    public function check_charge_result()
    {

        //SDK请求的参数
        $req_params = $_REQUEST['sdk_req_params'];

        //验证
        $str_sign = md5($req_params['app_id'].$req_params['app_key'].$req_params['iap_id'].$req_params['order_id'].$req_params['timestamp']);
        if($str_sign!=$req_params['sign']){
            $this->catchMsg('参数较验错误',$req_params['order_id']);
        }

        //todo 运营渠道多的情况需优化
        $order_id = $req_params['order_id'];
        if(strlen($req_params['order_id'])==36){
            $order_id = ltrim($req_params['order_id'],'A');
        }
        $order_id += 0;

        if($order_id<=0){
            //消息加密
            $msg = Aviup::encrypt(json_encode(array('msg'=>'订单编号参数错误'),JSON_UNESCAPED_UNICODE));
            $this->ajaxReturn(array('status'=>0,'msg'=>$msg),'JSON',JSON_UNESCAPED_UNICODE);
        }
        $res = M('Statistics')->where(array('id'=>$order_id))->find();
        $res['app_id'] = $res['application_id'];
        $res['timestamp'] = $_SERVER['REQUEST_TIME'];
        $res['sign'] = md5($res['app_id'].$res['iap_id'].$req_params['order_id'].$res['fee'].$res['status'].$res['imei'].$res['imsi'].$res['timestamp']);

        $par = array(
            'app_id'    => $res['application_id'],
            'iap_id'    => $res['iap_id'],
            'order_id'  => $req_params['order_id'],
            'fee'       => $res['fee'],
            'imei'      => $res['imei'],
            'imsi'      => $res['imsi'],
            'timestamp' => $res['timestamp'],
            'sign'      => $res['sign'],
            'status'    => $res['status'],
//            'dialog_msg'=> $req_params['dialog_msg'],
        );

        //消息加密
        $msg = Aviup::encrypt(json_encode($par,JSON_UNESCAPED_UNICODE));

        $this->ajaxReturn(array('status'=>0,'msg'=>$msg),'JSON',JSON_UNESCAPED_UNICODE);
        return true;
    }


    /**
     * @return mixed
     */
    public function upload_app_info()
    {
        $par_arr= $_REQUEST['sdk_req_params'];
        $is_enable = M('applications')->where(array(
            'id'=>$par_arr['app_id'],
            'app_key'=>$par_arr['app_key'],
        ))->getField('id');
        if(!$is_enable){
            $this->catchMsg('app_id或app_key错误！');
        }

        $sign_str = md5($par_arr['app_id'].$par_arr['ip'].$par_arr['imei'].$par_arr['timestamp']);
        if($sign_str!==$par_arr['sign']){
            $this->catchMsg('参数校验错误');
        }

        $data = array(
            'imei'=>$par_arr['imei'],
            'created'=>TIME
        );

        if(isset($par_arr['dialog_msg_version'])){
            $par_arr['dialog_msg_version']+=0;
            if($par_arr['dialog_msg_version'] < Aviup::$dialog_msg_version){
                $par_arr['dialog_msg_version'] = Aviup::$dialog_msg_version;
            }
        }

        if(!M('Clients')->where(array('id'=>$par_arr['recordid']))->getField('id')){
            $recordid = M('Clients')->add($data);
            $par_arr['recordid'] = $recordid;
        }

        $data['app_id']         = $par_arr['app_id'];
        $data['cid']            = $par_arr['recordid'];
        $data['ip']             = $par_arr['ip'];
        $data['macaddress']     = $par_arr['macaddress'];
        $data['imsi']           = $par_arr['imsi'];
        $data['appversion']     = $par_arr['appversion'];
        $data['appversionname'] = $par_arr['appversionname'];
        $data['apppackagename'] = $par_arr['apppackagename'];

        M('ClientExts')->add($data);

        $par_arr['timestamp'] = TIME;
        $par_arr['sign'] = md5($par_arr['app_id'].$par_arr['ip'].$par_arr['imei'].$par_arr['timestamp']);
        $msg = json_encode($par_arr,JSON_UNESCAPED_UNICODE);
        $msg = Aviup::encrypt($msg);
        $this->ajaxReturn(array(
            'status' => 0,
            'msg'    => $msg
        ),'JSON',JSON_UNESCAPED_UNICODE);
    }

}