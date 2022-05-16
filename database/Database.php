<?php
    
    namespace Waithira\Kicksfootware\database;
 
    use PDO;

    class Database
    {
        public $pdo;
        public function __construct()
        {
            
            $dsn = "mysql:host=localhost; dbname=kicksnairobi";
            $user = "root";
            $password = "waithira";
    
            try
            {
                $this->pdo = new \PDO($dsn, $user, $password);
                $this->pdo->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
                $this->pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE,\PDO::FETCH_ASSOC);
                $this->pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES,false);
            }catch(\Exception $e)
            {
                echo $e->getMessage();
            }
    
        }
    }
    
   $app =  new Database();
   echo "<pre>";
    var_dump($app);
   echo "</pre>";