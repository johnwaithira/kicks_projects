<?php
    
    namespace Waithira\Kicksfootware\app\security;

    use Dotenv\Dotenv;

   
    require_once dirname(__DIR__)."/../vendor/autoload.php";
    $dir = dirname(__DIR__);
    var_dump(dirname($dir));
    // $env = Dotenv::createImmutable(dirname());
    // $env->load();

    var_dump($_ENV);
    class Cipher
    {
        public static function Encrypt($data)
        {
        
        }
    
        public static function Decrypt($data)
        {
        
        }
    }