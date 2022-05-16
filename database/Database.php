<?php
    
    namespace Waithira\Kicksfootware\database;
    
    class Database
    {
        public function db()
        {
            var_dump(__DIR__);
            
        }
    }
    
    $app = new Database();
    $app->db();