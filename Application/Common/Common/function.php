<?php
defined('TIME') or define('TIME',$_SERVER['REQUEST_TIME']);

function makeSecType(){
    return 'bjjfwxkj.aviup.com';
}
/**
 * 获取服务器端IP地址
 * @return string
 */
function get_server_ip() {
    $host = $_SERVER['HTTP_HOST'];
    $host_info = explode(':',$host);
    return $host_info[0];
}

function getTime()
{
    return TIME;
}

/**
 * Created by PhpStorm.
 * User: 唐坤
 * Date: 2015/8/15
 * Time: 10:43
 */
/*
 *curl发送post请求接收返回的数据但不输出
 *@param string $url
 *@param array $postDate
 *@param bool $type default false
 *@param string $code default json
 *@return mixed
 */
function curlPost($url,$postData=array(),$code='')
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    //设置请求为post类型
    curl_setopt($ch, CURLOPT_POST, TRUE);
    //添加post类型
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    //执行请求，获得回复
    $r = curl_exec($ch);
    curl_close($ch);
    switch ($code) {
        case 'json':
            return json_encode($r);
            break;
        default:
            return $r;
    }
    return null;
}

function showSelected($request,$option)
{
    echo $request==$option ? 'selected="selected"' : '';
}

function guid()
{
    $charid = strtoupper(md5(uniqid(mt_rand(), true)));
    $uuid =substr($charid, 0, 8)
        .substr($charid, 8, 4)
        .substr($charid,12, 4)
        .substr($charid,16, 4)
        .substr($charid,20,12);
    return $uuid;
}

function Key16Code()
{
    $mtime = microtime ();
    return substr(md5($mtime),8,16);
}