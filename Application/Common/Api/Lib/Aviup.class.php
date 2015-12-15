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
    const ENC_IV = "0807060504030201";

    public static function encrypt($data){
        $pad = str_pad($data, ceil(strlen($data)/16.0)*16, " ");
        $td = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '', MCRYPT_MODE_CBC, '');
        mcrypt_generic_init ( $td , self::ENC_KEY , self::ENC_IV);
        $encrypt = mcrypt_generic($td, $pad);
        mcrypt_generic_deinit($td);
        mcrypt_module_close($td);
        return bin2hex($encrypt);
    }

    public static function decrypt($data){
        $td = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '', MCRYPT_MODE_CBC, '');
        mcrypt_generic_init ( $td , self::ENC_KEY , self::ENC_IV);
        $decrypt = mdecrypt_generic($td, hex2bin($data));
        mcrypt_generic_deinit($td);
        mcrypt_module_close($td);
        return $decrypt;
    }

    function hex2bin($data)
    {
        return pack("H*" , $data);
    }

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