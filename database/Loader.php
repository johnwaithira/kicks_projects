<?php
    
    namespace Waithira\Kicksfootware\database;
    
    use Dotenv\Dotenv;

    class Loader
    {
        public static function env()
        {
            require_once  dirname(__DIR__)."/vendor/autoload.php";
            $dotenv = Dotenv::createImmutable(dirname(__DIR__));
            $dotenv->load();
            
            return $_ENV;
        }
    }