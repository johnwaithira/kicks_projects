<?php
    
    namespace Waithira\Kicksfootware\database;
    
    use Dotenv\Dotenv;
    use Waithira\Kicksfootware\database\Loader;

    class Database
    {
        public $pdo = null;
        /**
         * @var array
         */
        public $dsn = Loader::env()['DB_TYPE'];
        public function __construct()
        {
            try {
                $this->pdo = new \PDO()
            }
            catch (\Exception $exception)
            {
                echo $exception->getMessage();
            }
        }
    }
    
    $app = new Database();
    $app->db();