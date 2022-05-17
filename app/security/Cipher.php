<?php
    
    namespace Waithira\Kicksfootware\app\security;
    define("ciphering", "AES-128-CTR");
    define("encryption_key", "70ee78752530ca350001ba2218726d5b1b4855d5db1d00d614322ac0921ed63af96e02ee340ecc46");
    define("encryption_iv", "1234567890123456");
    define("option", 0);
    class Cipher
    {
        public static function Encrypt($data)
        {
            return openssl_encrypt($data,
                ciphering,
                encryption_iv,
                option,
                encryption_key
            );
        }
    
        public static function Decrypt($data)
        {
            return openssl_decrypt($data,
                ciphering,
                encryption_iv,
                option,
                encryption_key
            );
        }
    
    }
    
  