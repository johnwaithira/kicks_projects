<?php
    
    namespace Waithira\Kicksfootware\app\security;

    use Dotenv\Dotenv;

   
    require_once dirname(__DIR__)."/../vendor/autoload.php";
    $env = Dotenv::createImmutable(dirname("/../".__DIR__));
    $env->load();

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