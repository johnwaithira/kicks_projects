<?php
    
    namespace Waithira\Kicksfootware\app\security;

    use Dotenv\Dotenv;

   
    require_once dirname(__DIR__)."/../vendor/autoload.php";
    $dir = dirname(__DIR__);
    $env = Dotenv::createImmutable(dirname($dir));
    $env->load();


    define("ciphering", $_ENV['CIPHERING']);
    define("encryption_key", $_ENV['CIPHER_KEY']);
    define("encryption_iv", $_ENV['CIPHER_IV']);
    define("option", $_ENV['CIPHER_OPTION']);
    
    class Cipher
    {
        public static function Encrypt($data)
        {
            return openssl_decrypt($data,
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


    $app = new Cipher();
    echo $app::Encrypt(123456789);