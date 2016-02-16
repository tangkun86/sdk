<?php
/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/27
 * Time: 17:54
 */

namespace Dev\Controller;


use Api\Lib\Aviup;
use Api\Lib\MNC;

class CtcclttxController extends ApicomController
{

    /**
     * @param $params
     * @return bool
     */
    public function applyOrder($params)
    {
        $mnc = new MNC();
        //生成订单
        $order_info = $this->generateOrder($params);
        $params['order_id'] = $order_info['order_id'];
        $params['behavior_status'] = $mnc->behavior_status['ctcc_langtian'];
        //获取指令端口
        $this->getCommand($params);
        return true;
    }


    /**
     * @param $params
     * @return bool
     */
    public function getCommand($params)
    {
        $mnc = new MNC();

        $post = array(
            'channelId'=>$params['channelId'],//平台分配
            'fee' => $params['fee'],
            'ip' => $params['ip'],
            'extra' => $params['order_id'],
            'imsi' => $params['imsi'], //手机imsi码
            'gameName' => $params['app_name'],
            'chargeName' => $params['iap_name'],
        );

        $interface_url = 'http://121.41.58.237:8981/center/getCommand.sys';
        $mac = $post['channelId'].$post['fee'].$post['ip'].$post['extra'].urlencode($post['gameName']).urlencode($post['chargeName']).$mnc->ctcc_config['key'];
        $post['mac'] = strtoupper(md5($mac));
        $code = curlPost($interface_url,$post);//json
        $code_arr = json_decode($code,true);
        $msg = $code_arr + $params;
        $msg['timestamp'] = $_SERVER['REQUEST_TIME'];
        $msg['sign'] = md5($msg['app_id'].$msg['iap_id'].$msg['fee'].$msg['order_id'].$msg['behavior_status'].$msg['timestamp']);

        //写日志
        /*M('Logs')->add(array(
            'created'=>TIME,
            'title'=>'getCommand',
            'content'=>$code,
        ));*/

        //消息加密
        $msg = Aviup::encrypt(json_encode($msg));
        $code_arr = json_decode($code,true);
        $resultCode = $code_arr['resultCode'];
        if($resultCode=='0000'){
            $this->ajaxReturn(array('status'=>0,'msg'=>$msg),'JSON',JSON_UNESCAPED_UNICODE);
        }else{
            //失败原因加入订单
            $error_text = Aviup::encrypt(json_encode(array(
                'errordescription'=>$mnc->ctcc_error[$resultCode],
                'order_id'=>$params['order_id']
            ),JSON_UNESCAPED_UNICODE));
            M('Statistics')->where(array('id'=>$params['order_id']))->setField(array('fail_reasion'=>$error_text));
            $this->ajaxReturn(array('status'=>1,'msg'=>$error_text),'JSON',JSON_UNESCAPED_UNICODE);
        }
        return true;
    }

    //第三方状态通知接口请求地址
    public function callBackNotice()
    {
        $req = array(
            'mobile'=>$_REQUEST['mobile'],
            'linkId'=>$_REQUEST['linkId'],
            'longCode'=>$_REQUEST['longCode'],
            'msg'=>$_REQUEST['msg'],
            'status'=>$_REQUEST['status'],
            'fee'=>$_REQUEST['fee'],
            'mac'=>$_REQUEST['mac'],
            'extra'=>$_REQUEST['extra'],//扩展字段
        );
        M('logs')->add(array(
            'created'=>TIME,
            'title'=>'回调请求参数信息',
            'content'=>json_encode($req),
        ));
        $mnc = new MNC();
        $token = md5($req['mobile'].$req['linkId'].$req['longCode'].$req['msg'].$req['status'].$req['fee'].$mnc->ctcc_config['key']);
        if($req['mac']!==strtoupper($token)){

            $msg = aviup::encrypt(json_encode(array(
                'errordescription'=>'参数校验错误',
                'order_id'=>$req['extra']
            ),JSON_UNESCAPED_UNICODE));

            $this->ajaxReturn(array(
                'status'=>1,
                'msg'=>$msg
            ),'JSON',JSON_UNESCAPED_UNICODE);

        }else{
            //更新计费信息
            $this->updateOrder($req);

        }
        return true;
    }


    /**
     * @param $req
     * @return bool
     */
    public function updateOrder($req)
    {
        switch($req['status']){
            case '01':
                $status = 4;break;
            case '02':
                $status = 7;break;
            default:
                $status = 1;
        }
        $data =array(
            'fee'=>$req['fee'],
            'mobile'=>$req['mobile'],
            'status'=>$status,
        );
        $model = M('Statistics');
        $model->where(array('id'=>$req['extra']))->setField($data);
        echo ('success');
        return true;
    }
}