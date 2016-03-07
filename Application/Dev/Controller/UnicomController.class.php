<?php
/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/27
 * Time: 17:52
 */

namespace Dev\Controller;


use Api\Lib\Aviup;
use Api\Lib\MNC;

class UnicomController extends ApicomController
{

    /**
     * @param $params
     */
    public function applyOrder($params)
    {
        //处理参数
        $params['ip'] = Aviup::handle_ip($params['ip']);
        $params['macaddress'] = str_replace(':','',$params['macaddress']);

        $order_info = $this->generateOrder($params);
        $status = 0;
        if($order_info===false){
            $status=1;
            $msg = array('errordescription'=>'订单生成失败','order_id'=>0);
        }else{
            $order_id = str_pad($order_info['order_id'],35,0,STR_PAD_LEFT);
            $order_id = 'A'.$order_id;
            $mnc = new MNC();
            $msg = array(
                'appid'     => $mnc->cucc_config['appid'],//合作渠道申报的虚拟作品的appid
                'app_id'    => $order_info['application_id'],//合作渠道申报的虚拟作品的appid
                'cpid'      => $mnc->cucc_config['cpid'],//合作渠道VAC资质编号
                'channelid' => $mnc->cucc_config['channelid'],//沃商店为合作渠道分配的渠道ID
                'gamename'  => $order_info['app_name'],//实际应用或者游戏的名称 （不是虚拟作品），用来显示在计费提示对话框中。
                'vaccode'   => $mnc->cucc_config['vaccode'][$order_info['fee']],//VAC计费代码(12位计费代码）
                'props'     => $order_info['iap_name'],//实际购买物品名称 （不是虚拟作品）用来显示在计费提示对话框中。
                'money'     => $order_info['fee'],//道具金额（元），用来显示在计费提示对话框中。
                'order_id'  => $order_id,//合作渠道产生的订单号（联网）或者唯一编号（单机），必须为36位字母、数字或两种组合，不能含其他字符。此号码主要用于透传，合作渠道可以自行定义。
            );
            $msg['order_id']    = $order_id;
            $msg['iap_id']      = $order_info['iap_id'];
            $msg['fee']         = $order_info['fee'];
            $msg['behavior_status'] = $mnc->behavior_status['cucc_wo_shop'];
        }

        $msg['app_name']  = $params['app_name'];
        $msg['iap_name']  = $params['iap_name'];
        $msg['timestamp'] = $_SERVER['REQUEST_TIME'];
        $msg['dialog_msg'] = $params['dialog_msg'];
        $msg['sign'] = md5($msg['app_id'].$msg['iap_id'].$msg['fee'].$msg['order_id'].$msg['behavior_status'].$msg['timestamp']);

        //消息加密
        $msg = Aviup::encrypt(json_encode($msg,JSON_UNESCAPED_UNICODE));

        $this->ajaxReturn(array(
            'status'=>$status,
            'msg'   =>$msg
        ),'JSON',JSON_UNESCAPED_UNICODE);
    }

    //校验订单有效性
    public function validateOrder()
    {
        $xml = file_get_contents('php://input');
        $mnc_conf = new MNC();
        $xml_obj = simplexml_load_string($xml,'SimpleXMLElement',LIBXML_NOCDATA);
        $secretKey = md5('orderid='.$xml_obj->orderid.'&Key='.$mnc_conf->cucc_config['Key']);
        $statistics_model = M('Statistics');

        $order_id = $xml_obj->orderid;
        $order_id = ltrim($order_id,'A');
        $order_id += 0;
        $order_condition = array('id'=>$order_id);

        $order_uniq = $statistics_model->where($order_condition+array('status'=>5))->getField('id');
        $Statistics = $statistics_model->where($order_condition)->find();
        $statistics_model->where($order_condition)->setField(array('status'=>5));
        //todo test
        if((strtolower($secretKey)!==strtolower($xml_obj->signMsg))||$order_uniq){
            $xml_return  = '<?xml version="1.0" encoding="UTF-8"?>';
            $xml_return .= '<paymessages>';
            $xml_return .= '<checkOrderIdRsp>1</checkOrderIdRsp>';
            $xml_return .= '</paymessages>';
        }else{
            //get data from db

            $iap = M('Iaps')->where(array('id'=>$Statistics['iap_id']))->find();
            $application = M('Applications')->where(array('id'=>$iap['application_id']))->find();
            $developer = M('Developers')->where(array('user_id'=>$application['user_id']))->find();
            $Statistics['created'] = date('YmdHis',$Statistics['created']);
            $fees = $Statistics['fee']*100;
            //
            $xml_return  = '<?xml version="1.0" encoding="UTF-8"?>';
            $xml_return .= '<paymessages>';
            $xml_return .= '<checkOrderIdRsp>0</checkOrderIdRsp>';
            $xml_return .= '<appname>'.$application['name'].'</appname>';
            $xml_return .= '<appversion>'.$Statistics['appversion'].'</appversion>';
            $xml_return .= '<appdeveloper>'.$developer['company_name'].'</appdeveloper>';
            $xml_return .= '<feename>'.$iap['name'].'</feename>';
            $xml_return .= '<payfee>'.$fees.'</payfee>';
            $xml_return .= '<serviceid>'.$mnc_conf->cucc_config['vaccode'][$Statistics['fee']].'</serviceid>';
            $xml_return .= '<gameaccount>'.$Statistics['gameaccount'].'</gameaccount>';
            $xml_return .= '<appid>'.$application['id'].'</appid>';
//            $xml_return .= '<appid>90810000684220150909121700076900</appid>';
            $xml_return .= '<channelid>'.$mnc_conf->cucc_config['channelid'].'</channelid>';
            $xml_return .= '<cpid>'.$mnc_conf->cucc_config['cpid'].'</cpid>';
            $xml_return .= '<ordertime>'.$Statistics['created'].'</ordertime>';
            $xml_return .= '<imei>'.$Statistics['imei'].'</imei>';
            $xml_return .= '<ipaddress>'.$Statistics['ip'].'</ipaddress>';
            $xml_return .= '<macaddress>'.$Statistics['macaddress'].'</macaddress>';
            $xml_return .= '</paymessages>';
        }
        M('Logs')->add(array(
            'title'=>'toCucc',
            'content'=>$xml_return,
            'created'=>TIME
        ));
        echo $xml_return;
    }

    //回调地址用作检验订单和返回处理订单信息
    public function checkOrder()
    {

        if(isset($_REQUEST['serviceid'])){
            if($_REQUEST['serviceid']=='validateorderid'){
                $this->validateOrder();
                exit;
            }
        }

        $xml = file_get_contents('php://input');
        M('Logs')->add(array(
            'title'=>'cuccResponse',
            'content'=>$xml,
            'created'=>TIME
        ));
        $xml_obj = simplexml_load_string($xml,'SimpleXMLElement',LIBXML_NOCDATA);
        $mnc = new MNC();
        $sercretKey = md5('orderid='.$xml_obj->orderid.'&ordertime='.$xml_obj->ordertime.'&cpid='.$xml_obj->cpid.'&appid='.$xml_obj->appid.'&fid='.$xml_obj->fid.'&consumeCode='.$xml_obj->consumeCode.'&payfee='.$xml_obj->payfee.'&payType='.$xml_obj->payType.'&hRet='.$xml_obj->hRet.'&status='.$xml_obj->status.'&Key='.$mnc->cucc_config['Key']);
        $xml_return = '<?xml version="1.0" encoding="UTF-8"?>';
        if(strtolower($sercretKey)===strtolower($xml_obj->signMsg)){
            $xml_return.= '<callbackRsp>1</callbackRsp>';
            $this->updateOrder($xml_obj);
        }else{
            $xml_return.= '<callbackRsp>2</callbackRsp>';
        }
        echo $xml_return;
    }

    /**
     * @param $xml_obj
     */
    public function updateOrder($xml_obj)
    {
        $order_id = $xml_obj->orderid;
        $order_id = ltrim($order_id,'A');
        $order_id += 0;

        if($xml_obj->hRet==0){//成功
            $status = 1;
        }else{
            $status = 4;
        }
        $data =array(
            'fee'=>$xml_obj->payfee/100,//单位分转换成元
            'status'=>$status,
        );
        $model = M('Statistics');
        $res = $model->where(array('id'=>$order_id))->setField($data);
//        $res = $model->where('order_key="jfwxDE52D80A9B5C27943EE1855970DD371F"')->find();
//        $res = $model->where($condition)->find();
        if($res===false){
            M('Logs')->add(array(
                'created'=>TIME,
                'title'=>'updateStat_error',
                'content'=>$model->getError().' '.$model->getLastSql(),
            ));
        }
    }

}