<?php
    
    namespace Waithira\Kicksfootware\database;
    
    use Dotenv\Dotenv;

    class Loader
    {
        public static function type()
        {
            require_once  dirname(__DIR__)."/vendor/autoload.php";
            $dotenv = Dotenv::createImmutable(dirname(__DIR__));
            $dotenv->load();
            
            return $_ENV['DB_TYPE'];
        }
        public static function host()
        {
            require_once  dirname(__DIR__)."/vendor/autoload.php";
            $dotenv = Dotenv::createImmutable(dirname(__DIR__));
            $dotenv->load();
        
            return $_ENV['DB_HOST'];
        }
    }