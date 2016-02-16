<?php
/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/23
 * Time: 10:33
 */

namespace Api\Lib;


class Aviup
{

    const ENC_KEY = "aviup!EE1Eden#dA";

    const ENC_IV = "Jm5%Uc87Yd9&Qw46";

    public static $dialog_msg_version = 2;

    public static $dialog_msg = '
        {
            "prepare_title":"准备中",
            "prepare_msg":"正在准备支付环境，请稍等…",
            "confirm_title":"确认",
            "confirm_msg":"您是否希望花费%FEE%元购买由%APP_NAME%应用提供的%IAP_NAME%物品？",
            "progress_title":"支付中",
            "progress_msg":"请稍等，视手机网络与运营商网络情况该过程可能需要花费10秒到70秒不等。",
            "error_title":"注意",
            "error_msg":"支付过程中发生了问题 %ERRORDESCRIPTION%，订单编号为:%ORDER_ID%。\n 计费超时可在收到运营商计费成功短信后，重新启动APP来获得购买的物品。 \n 计费相关的其他问题可联系客服邮箱xuw@aviup.com"
        }';

    /**
     * @param string $data json style
     * @return string
     */
    public static function encrypt($data){
        $size = mcrypt_get_block_size(MCRYPT_RIJNDAEL_128,MCRYPT_MODE_CBC);
        $data = self::pkcs5_pad($data, $size);
        $pad = str_pad($data, ceil(strlen($data)/16.0)*16, " ");
        $td = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '', MCRYPT_MODE_CBC, '');
        mcrypt_generic_init ( $td , self::ENC_KEY , self::ENC_IV);
        $encrypt = mcrypt_generic($td, $pad);
        mcrypt_generic_deinit($td);
        mcrypt_module_close($td);
        return bin2hex($encrypt);
    }

    /**
     * @param string $data
     * @return string
     */
    public static function decrypt($data){
        $td = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '', MCRYPT_MODE_CBC, '');
        mcrypt_generic_init ( $td , self::ENC_KEY , self::ENC_IV);
        $decrypt = mdecrypt_generic($td, hex2bin($data));
        mcrypt_generic_deinit($td);
        mcrypt_module_close($td);
        $decrypt = self::pkcs5_unpad($decrypt);
        return $decrypt;
    }

    public static function pkcs5_pad ($text, $blocksize) {
        $pad = $blocksize - (strlen($text) % $blocksize);
        return $text . str_repeat(chr($pad), $pad);
    }

    public static function pkcs5_unpad($text){
        $pad = ord($text{strlen($text)-1});
        if ($pad > strlen($text)) {
            return false;
        }
        if (strspn($text, chr($pad), strlen($text) - $pad) != $pad){
            return false;
        }
        return substr($text, 0, -1 * $pad);
    }

    /**
     * @param $data
     * @return string
     */
    function hex2bin($data)
    {
        return pack("H*" , $data);
    }

    /**
     * @param $ip
     * @return string
     */
    public static function handle_ip($ip)
    {
        $tmpArr = explode('.',$ip);
        if(!empty($tmpArr)){
            foreach($tmpArr as $key=>$vo)
                $tmpArr[$key] = str_pad($vo,3,0,STR_PAD_LEFT);
        }
        return implode('',$tmpArr);
    }

}