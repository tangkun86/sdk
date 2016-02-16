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
            "prepare_title":"Prepare",
            "prepare_msg":"check order information from server,please wait.",
            "confirm_title":"Confirm",
            "confirm_msg":"您将花费%FEE%元，购买%APP_NAME%中的%IAP_NAME%物品。本次交易订单号为%ORDER_ID%。",
            "progress_title":"Progress",
            "progress_msg":"charging, please wait.",
            "error_title":"Error",
            "error_msg":"some issue has been detected, please contact 02812345678."
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