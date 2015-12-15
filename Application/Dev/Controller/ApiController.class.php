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

    public function _initialize()
    {
        //验证请求
        if(!$this->validateReq()){
            die('无效的请求');
        }
    }

    public function prepay()
    {

//        $_REQUEST['apply_pay'] = 'd34d5a3d37e8be3d2bc599b2c4dd5615bc5cebc7f1135577bb12c41bfa298c601fed4b8f9510cf3c0958fc9bc5ab15b05b167c7852b688392fdca30de699144e278990fd34b8a840d4b8d04cabf436912578352598029d95a448185b3ea50765599a2078d338491dd28baebe58f6c724179e1b544d2718b83d1c7327495ea74d730e1aec49d9e6976ce16df374b8a05ab27e2c82ed0aa548848736163724bbcf2ec27410a4baa9bbb80efb8d83b703fa59451cad38eba73d6bdae75b9e30cbb78d09e360e466e0f6951cfe01fe9e69a7b58e6adbe9ebc5bfb80eb69fba8520ff46662edb8df9038c274120ac90cc2f3999a835ddfbfc8632e50d1fb7b1638bcc9bc559c6f5b207906b051199a5decd2ee2540b888e494f35cf2313ec007dee28b3e18001b4123cd20bab3fe632dda30bc17e93a255c624ed8123e09f4806b1dc1ca774c5b1be1d96acc6f6150b4b2f96';
//        var_dump(md5("1600100016T0000246001e4907eaff0d7460018172638740898601128810117148461234567890"));exit;
//        $_REQUEST['apply_pay'] = Aviup::encrypt('{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","mnc":"46001","ip":"192.168.137.104","macaddress":"e4907eaff0d7","appversion":1,"imsi":"460018172638740","imei":"89860112881011714846","appversionname":"1.0","apppackagename":"com.example.demo","timestamp":"1234567890","sign":"23d9de85f47b69d647dbae33f3242972"}');
//        $_REQUEST['test'] = 1;
        //接收解析SDK的请求并记录日志
        $sdk_req_data = Aviup::decrypt($_REQUEST['apply_pay']);

        //SDK请求的参数
        $req_params = json_decode($sdk_req_data,true);
//        $req_params['iap_key'] = $req_params['iap_id'];
        $content = $req_params['app_id'].$req_params['iap_id'].$req_params['mnc'].$req_params['macaddress'].$req_params['imsi'].$req_params['imei'].$req_params['timestamp'];
        $rec_data = array(
            'title'=>'prepay',
            'content'=> !$sdk_req_data ? $content : $sdk_req_data,
            'created'=>$_SERVER['REQUEST_TIME'],
        );
        if(!isset($_REQUEST['test'])){
            M('Logs')->add($rec_data);
        }else{
            $req_params['test'] = 1;
        }

        //验证
        $str_sign = md5($req_params['app_id'].$req_params['iap_id'].$req_params['mnc'].$req_params['macaddress'].$req_params['imsi'].$req_params['imei'].$req_params['timestamp']);

        if($str_sign!=$req_params['sign']){
            $this->ajaxReturn(array(
                'status'=>1,
                'msg'=>'no access'
            ));
        }



        //处理参数
        $req_params['ip'] = Aviup::handle_ip($req_params['ip']);
        $req_params['macaddress'] = str_replace(':','',$req_params['macaddress']);

        //验证计费点信息，返回所需计费点相关参数
        $iapInfo = $this->validateIapInfo($req_params);

        //合并参数
        $req_iap_params = $req_params+$iapInfo;
//        var_dump($req_iap_params);exit;
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

    public function validateReq()
    {
        //todo 验证过程
        return true;
    }

    public function validateIapInfo($params){
        $iap = M('Iaps')->where(array('status'=>1,'iap_key'=>$params['iap_id']))->find();
        if(!$iap){
            $this->ajaxReturn(array(
                'status'=>1,
                'msg'=>'计费点未上线！',
            ));
        }else{
            $app = M('Applications')->where(array('status'=>3,'id'=>$params['app_id'],'app_key'=>$params['app_key']))->find();
            if(!$app){
                $this->ajaxReturn(array(
                    'status'=>1,
                    'msg'=>'计费应用未上线！',
                ));
            }else{
                $fee = M('Fees')->where(array('status'=>1,'pay_code'=>$iap['pay_code']))->find();

                if(!$fee){
                    $this->ajaxReturn(array(
                        'status'=>1,
                        'msg'=>'计费点费用设置未发布！',
                    ));
                }
                else{//返回相关数据
                    $operator=M('Mncs')->where(array('mnc'=>$params['mnc']))->getField('operator');
                    $payCode = M('PayCode')->where(array('pay_code'=>$iap['pay_code'],'operator'=>$operator))->find();
                    if(!$payCode){
                        $this->ajaxReturn(array(
                            'status'=>1,
                            'msg'=>'不在计费范围！',
                        ));
                    }
                    $params['app_name'] = $app['name'];
                    $params['iap_name'] = $iap['name'];
                    $params['fee'] = $payCode['fee'];
//                    return $params;
                }
            }
        }
        return $params;
    }

    public function check_charge_result()
    {
        //接收解析SDK的请求并记录日志
//        var_dump(md5("1644e1e47caa2e5e4000100016T00002jfwx575F24882E4DDFB1E93012244E7887CC1234567890"));exit;
//        $_REQUEST['get_order_result'] = 'd34d5a3d37e8be3d2bc599b2c4dd5615bc5cebc7f1135577bb12c41bfa298c601fed4b8f9510cf3c0958fc9bc5ab15b05b167c7852b688392fdca30de699144ed45e5e4d41d88ba0ad0e67df8ebca97bcd5a88114cb644948430ca54719486d772dcaead448950d89a890ab242092f39dadcc6c11759a93a462a5ec0fe7eeb7033f34b53cebe32bc94d45ccaf7dfba7d9b956b2b088c2ce366cc9258220549eaeac9b35aa68220b448727b66de47a6a31b7de4814772413cbaac4d361ce6318d';
//        $_REQUEST['get_order_result'] = Aviup::encrypt('{"app_id":"16","app_key":"44e1e47caa2e5e40","iap_key":"00100016T00002","timestamp":"1234567890","sign":"4c6eab6028de8fde534392b879352f3a","order_key":"jfwx575F24882E4DDFB1E93012244E7887CC"}');
//        var_dump($_REQUEST['get_order_result']);exit;
        $sdk_req_data = Aviup::decrypt($_REQUEST['get_order_result']);

        $rec_data = array(
            'title'=>'TEST',
            'content'=>$sdk_req_data,
            'created'=>$_SERVER['REQUEST_TIME'],
        );
        M('Logs')->add($rec_data);

        //SDK请求的参数
        $req_params = json_decode($sdk_req_data,true);

        //验证
        $str_sign = md5($req_params['app_id'].$req_params['app_key'].$req_params['iap_id'].$req_params['order_key'].$req_params['timestamp']);
        if($str_sign!=$req_params['sign']){
            $this->ajaxReturn(array(
                'status'=>1,
                'msg'=>'no access'
            ));
        }

        $order_key = $req_params['order_key'];
        $res = M('Statistics')->where(array('order_key'=>$order_key))->find();
        $res['app_id'] = $res['application_id'];
        $res['timestamp'] = $_SERVER['REQUEST_TIME'];

        #var_dump($res['app_id'].$res['iap_id'].$res['order_key'].$res['fee'].$res['status'].$res['imei'].$res['imsi'].$res['timestamp']);exit;
        $res['sign'] = md5($res['app_id'].$res['iap_id'].$res['order_key'].$res['fee'].$res['status'].$res['imei'].$res['imsi'].$res['timestamp']);


        $res = array(
            'app_id'=>$res['application_id'],
            'iap_id'=>$res['iap_id'],
            'order_key'=>$res['order_key'],
            'fee'=>$res['fee'],
            'imei'=>$res['imei'],
            'imsi'=>$res['imsi'],
            'timestamp'=>$res['timestamp'],
            'sign'=>$res['sign'],
            'status'=>$res['status'],
        );

//        var_dump($res);exit;
        //消息加密
        $res = Aviup::encrypt(json_encode($res));

        $this->ajaxReturn(array('status'=>0,'msg'=>$res));
    }

}