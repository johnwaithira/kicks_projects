<?php
    
    namespace Waithira\Kicksfootware\database;
    
    use Dotenv\Dotenv;

    class Database
    {
        public function db()
        {
            require_once  dirname(__DIR__)."/vendor/autoload.php";
            $dotenv = Dotenv::createImmutable(dirname(__DIR__));
            $dotenv->load();
            echo  "<pre>";
            var_dump($_ENV);
            echo "</pre>";
            
        }
    }
    
    $app = new Database();
    $app->db();