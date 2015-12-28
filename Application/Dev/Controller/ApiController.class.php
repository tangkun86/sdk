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

    public function test()
    {
        $str = "7e0c12026d9bfd830e447c7f454d949ed9b99d31fd280a267635b034e012e85c9c1ba325ceb15e73b2f2603739e6e6f71229c2a4883f484168cc6de90b09108b";
//        $str = "7e0c12026d9bfd830e447c7f454d949e62beb58a1f817ff45c0fb1cfffaaaba2f2cb8e6052cc75ed5d3d0e54768c67c9";
//        $str = "7e0c12026d9bfd830e447c7f454d949ed5eaa01c756c11bbfa37d3a8102b9dba309c1def4e9e79cc8b3e640c6e6eb9ba";
        echo Aviup::decrypt($str);
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

//        var_dump(md5("1600100016T0000246001e4907eaff0d7460018172638740898601128810117148461234567890"));exit;
//        $_REQUEST['apply_pay'] = Aviup::encrypt('{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.137.104","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo","timestamp":"1234567890","sign":"23d9de85f47b69d647dbae33f3242972","gameaccount":"游戏aaa账号@$%#"}');
//
//        $_REQUEST['test'] = 1;
        //接收解析SDK的请求并记录日志
//        $sdk_req_data = '{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_id":"00100016T00002","mnc":"46001","ip":"192.168.1.101","macaddress":"e4:90:7e:af:f0:d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo","timestamp":"1450344938","sign":"de060e3df64f4837d28c951e51b176ca","gameaccount":"account"}';
        $sdk_req_data = Aviup::decrypt($_REQUEST['apply_pay']);
        if(!$sdk_req_data){
            $this->catchMsg('解密错误');
        }
        //SDK请求的参数
        $req_params = json_decode($sdk_req_data,true);
        $content    = $req_params['app_id'].$req_params['iap_id'].$req_params['mnc'].$req_params['macaddress'].$req_params['imsi'].$req_params['imei'].$req_params['timestamp'];
        $rec_data   = array(
            'title'  =>'prepay',
            'content'=> !$sdk_req_data ? $content : $sdk_req_data,
            'created'=>$_SERVER['REQUEST_TIME'],
        );
        if(!isset($_REQUEST['test'])){
            M('Logs')->add($rec_data);
        }else{
            $req_params['test'] = 1;
        }

        //验证
        $sign_str = $req_params['app_id'].$req_params['iap_id'].$req_params['mnc'].$req_params['macaddress'].$req_params['imsi'].$req_params['imei'].$req_params['timestamp'];
        $str_sign = md5($sign_str);

        if($str_sign!=$req_params['sign']){
            $this->ajaxReturn(array(
                'status'=>1,
                'msg'=>array('errordescription'=>'参数校验错误')
            ),'JSON',JSON_UNESCAPED_UNICODE);
        }
        //验证计费点信息，返回所需计费点相关参数
        $iapInfo = $this->validateIapInfo($req_params);

        //合并参数
        $req_iap_params = $req_params+$iapInfo;
        $mncConfObject = new MNC();

        //选择运营商走各自的计费支付流程 todo 编码映射
        $mnc = array(
            '46001'=>'CTCC',//电信
//            '46001'=>'CUCC',//联通
        );

        switch($mnc[$req_params['mnc']]){
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
        if(ACTION_NAME=='prepay' && !$_REQUEST['apply_pay']){
            return false;
        }

        if(ACTION_NAME=='check_charge_result' && !$_REQUEST['get_order_result']){
            return false;
        }

        return true;
    }


    /**
     * @param string $str
     * @param int $order_id
     * @return bool
     */
    public function catchMsg($str='error',$order_id=0)
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
            'operator'  =>$params['mnc'],
            'local_time'=>date('YmdHis',TIME),
            'created'   =>TIME,
            'ip'        =>$params['ip'],
            'macaddress'=>$params['macaddress'],
            'appversion'=>$params['appversion'],
            'imei'      =>$params['imei'],
            'imsi'      =>$params['imsi'],
            'appversionname'=>$params['appversionname'],
            'apppackagename'=>$params['apppackagename'],
            'gameaccount'   =>!isset($params['gameaccount'])?'novalue':$params['gameaccount'],
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
        //接收解析SDK的请求并记录日志
//        var_dump(md5("1644e1e47caa2e5e4000100016T00002jfwx575F24882E4DDFB1E93012244E7887CC1234567890"));exit;
//        $_REQUEST['get_order_result'] = 'd34d5a3d37e8be3d2bc599b2c4dd5615bc5cebc7f1135577bb12c41bfa298c601fed4b8f9510cf3c0958fc9bc5ab15b05b167c7852b688392fdca30de699144ed45e5e4d41d88ba0ad0e67df8ebca97bcd5a88114cb644948430ca54719486d772dcaead448950d89a890ab242092f39dadcc6c11759a93a462a5ec0fe7eeb7033f34b53cebe32bc94d45ccaf7dfba7d9b956b2b088c2ce366cc9258220549eaeac9b35aa68220b448727b66de47a6a31b7de4814772413cbaac4d361ce6318d';
//        $_REQUEST['get_order_result'] = Aviup::encrypt('{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","timestamp":"1234567890","sign":"4c6eab6028de8fde534392b879352f3a","order_key":"jfwx575F24882E4DDFB1E93012244E7887CC"}');
//        var_dump($_REQUEST['get_order_result']);exit;
        $sdk_req_data = Aviup::decrypt($_REQUEST['get_order_result']);

        $rec_data = array(
            'title'     =>'TEST',
            'content'   =>$sdk_req_data,
            'created'   =>$_SERVER['REQUEST_TIME'],
        );
        M('Logs')->add($rec_data);

        //SDK请求的参数
        $req_params = json_decode($sdk_req_data,true);

        //验证
        $str_sign = md5($req_params['app_id'].$req_params['app_key'].$req_params['iap_id'].$req_params['order_id'].$req_params['timestamp']);
        if($str_sign!=$req_params['sign']){
            $this->catchMsg('参数较验错误',$req_params['order_id']);
        }

        $order_id = $req_params['order_id'];
        $res = M('Statistics')->where(array('id'=>$order_id))->find();
        $res['app_id'] = $res['application_id'];
        $res['timestamp'] = $_SERVER['REQUEST_TIME'];
        $res['sign'] = md5($res['app_id'].$res['iap_id'].$res['id'].$res['fee'].$res['status'].$res['imei'].$res['imsi'].$res['timestamp']);

        $par = array(
            'app_id'    =>$res['application_id'],
            'iap_id'    =>$res['iap_id'],
            'order_id'  =>$res['order_key'],
            'fee'       =>$res['fee'],
            'imei'      =>$res['imei'],
            'imsi'      =>$res['imsi'],
            'timestamp' =>$res['timestamp'],
            'sign'      =>$res['sign'],
            'status'    =>$res['status'],
        );

        //消息加密
        $msg = Aviup::encrypt(json_encode($par,JSON_UNESCAPED_UNICODE));

        $this->ajaxReturn(array('status'=>0,'msg'=>$msg),'JSON',JSON_UNESCAPED_UNICODE);
        return true;
    }

}