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
    public function applyOrder($params)
    {
        $mnc = new MNC();
        //生成订单
        $order_info = $this->generateOrder($params);
        $params['extra'] = $order_info['id'];
        $params['order_key'] = $order_info['order_key'];
        $params['behavior_status'] = $mnc->behavior_status['ctcc_langtian'];

        if(isset($params['test'])){
            $req['extra'] = $order_info['id'];
            $req['fee'] = $order_info['fee'];
            $req['mobile'] = $order_info['mobile'];
            $req['status'] = '00';
            $this->updateOrder($req);
            $order_info['longCode']='106598721';
            $order_info['resultCode']='0000';
            $order_info['code']='01#1185api#05kpP4000';
            $msg = $order_info+$params;
            //消息加密
            $msg = Aviup::encrypt(json_encode($msg));
            $msg['timestamp'] = $_SERVER['REQUEST_TIME'];
            $str = $msg['app_id'].$msg['iap_id'].$msg['fee'].$msg['order_key'].$msg['behavior_status'].$msg['timestamp'];
            $msg['sign'] = md5($str);
            $this->ajaxReturn(array('status'=>0,'msg'=>$msg));
        }
        //获取指令端口
        $this->getCommand($params);
        return;
    }

    public function getCommand($params)
    {
        $mnc = new MNC();

        $post = array(
            'channelId'=>$params['channelId'],//平台分配
            'fee' => $params['fee'],
            'ip' => get_server_ip(),
            'extra' => $params['extra'],
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
        $msg['sign'] = md5($msg['app_id'].$msg['iap_id'].$msg['fee'].$msg['order_key'].$msg['behavior_status'].$msg['timestamp']);

        //写日志
        M('Logs')->add(array(
            'created'=>TIME,
            'title'=>'getCommand',
            'content'=>$code,
        ));

        //消息加密
        $msg = Aviup::encrypt(json_encode($msg));
        $this->ajaxReturn(array('status'=>0,'msg'=>$msg));
        if($code->resultCode=='0000'){
            $this->ajaxReturn(array('status'=>0,'msg'=>$msg));
        }else{
            $this->ajaxReturn(array('status'=>1,'msg'=>$mnc->ctcc_error[$code->resultCode]));
        }

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
            $this->ajaxReturn(array(
                'status'=>1,
                'msg'=>'该通知是虚假信息！'
            ));
        }else{
            $logs = array(
                'title'=>'朗天通讯返回状态:'.$mnc->ctcc_return_status[$req['status']],
                'created'=>TIME,
                'content'=>json_encode($req),
            );
            M('Logs')->add($logs);

            //写逻辑 更新计费信息
            $this->updateOrder($req);

            exit('success');
        }
    }

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
        $res = $model->where(array('id'=>$req['extra']))->setField($data);
        if($res===false){
            M('Logs')->add(array(
                'created'=>TIME,
                'title'=>'updateStat_error',
                'content'=>$model->getError().' '.$model->getLastSql(),
            ));
        }
    }
}