<?php
    
    namespace Waithira\Kicksfootware\database;
    
    use Dotenv\Dotenv;

    class Database
    {
        public function __construct()
        {
            try {
            
            }
            catch (\Exception $exception)
            {
                echo $exception->getMessage();
            }
        }
    }
    
    $app = new Database();
    $app->db();