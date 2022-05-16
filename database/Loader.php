<?php
    
    namespace Waithira\Kicksfootware\database;
    
    use Dotenv\Dotenv;

    class Loader
    {
        /**
         * @return mixed
         */
        public static function type() : string
        {
            require_once  dirname(__DIR__)."/vendor/autoload.php";
            $dotenv = Dotenv::createImmutable(dirname(__DIR__));
            $dotenv->load();
            
            var_dump($_ENV);
//            return $_ENV['DB_TYPE'];
        }
        public static function host()
        {
            require_once  dirname(__DIR__)."/vendor/autoload.php";
            $dotenv = Dotenv::createImmutable(dirname(__DIR__));
            $dotenv->load();
        
            return $_ENV['DB_HOST'];
        }
        public static function dbname()
        {
            require_once  dirname(__DIR__)."/vendor/autoload.php";
            $dotenv = Dotenv::createImmutable(dirname(__DIR__));
            $dotenv->load();
        
            return $_ENV['DB_NAME'];
        }
        public static function user()
        {
            require_once  dirname(__DIR__)."/vendor/autoload.php";
            $dotenv = Dotenv::createImmutable(dirname(__DIR__));
            $dotenv->load();
        
            return $_ENV['DB_USER'];
        }
    
        public static function password(): mixed
        {
            require_once  dirname(__DIR__)."/vendor/autoload.php";
            $dotenv = Dotenv::createImmutable(dirname(__DIR__));
            $dotenv->load();
        
            return $_ENV['DB_PWD'];
        }
    }
    $app = new Loader();
     $app::type();