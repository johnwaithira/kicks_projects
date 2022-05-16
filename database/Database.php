<?php
    
    namespace Waithira\Kicksfootware\database;
 
    class Database
    {
        public function db()
        {
            echo Loader::type();
        }
        
    }
    
    $app = new Database();
    $app->db();