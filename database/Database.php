<?php
    
    namespace Waithira\Kicksfootware\database;
    use Waithira\Kicksfootware\database\Loader;
    
    class Database
    {
        /**
         * @var string|mixed
         */
        public string $dns =" Loader::type()";
        
        public function db()
        {
            echo $this->dns;
        }
        
    }
    
    $app = new Database();
    $app->db();