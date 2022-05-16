<?php
    
    namespace Waithira\Kicksfootware\database;
    use Waithira\Kicksfootware\database\Loader;
    
    class Database
    {
        public function db()
        {
            echo Loader::type();
        }
        
    }
    
    $app = new Database();
    $app->db();