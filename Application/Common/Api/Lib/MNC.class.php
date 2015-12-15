<?php
/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/23
 * Time: 14:56
 */

namespace Api\Lib;


class MNC
{
    public $behavior_status = array(
        'ctcc_langtian'=>'0',//朗天通讯
        'cucc_wo_shop'=>'1', //沃商店
    );

    public $ctcc_config = array(
        'key'       =>'1Z115R19',
        'channelId' =>'1185',
    );

    public $ctcc_return_status = array(
        '00'=>'计费成功',
        '01'=>'计费失败',
        '02'=>'未知状态',
    );

    public $ctcc_error = array(
        '1001'=>'游戏名称为空',
        '1002'=>'计费点名称为空',
        '1003'=>'Mac校验信息为空',
        '1004'=>'资费为空',
        '1005'=>'渠道id为空',
        '2001'=>'渠道不存在',
        '2002'=>'校验出错',
        '2005'=>'游戏名称超长',
        '2006'=>'计费点名称超长',
        '2007'=>'扩展字段超长',
        '2008'=>'下行内容过长',
        '3001'=>'没有可用指令',
        '3002'=>'游戏名称未审核',
        '3003'=>'黑名单',
        '3004'=>'超总量单号码日月限',
    );

    public $cmcc_config = array(
        'channelid'=>'',
    );

    public $cucc_config = array(
        'channelid'=>'28372',
        'cpid'=>'91004000',
        'Key'=>'66afda293cf634fbffcc',
    );
}