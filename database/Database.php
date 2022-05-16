<?php
    
    namespace Waithira\Kicksfootware\database;
 
    use Dotenv\Dotenv;

    class Database
    {
        public function db()
        {require_once  dirname(__DIR__)."/vendor/autoload.php";
            $dotenv = Dotenv::createImmutable(dirname(__DIR__));
            $dotenv->load();
    
            return $_ENV;
        }
        
    }
    
    $app = new Database();
    var_dump(    $app->db());