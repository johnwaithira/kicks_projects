<?php
    
    namespace Waithira\Kicksfootware\database;
 
    use Dotenv\Dotenv;
    use PDO;

    class Database
    {
        public $pdo = null;
        public $dns =;
        public function __construct()
        {
            try {
                $this->pdo = new \PDO($dns, $user, $pwd);
                $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                $this->pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
            }
            catch (\Exception $exception)
            {
                echo $exception->getMessage();
            }
        }
        public function db(): array
        {require_once  dirname(__DIR__)."/vendor/autoload.php";
            $dotenv = Dotenv::createImmutable(dirname(__DIR__));
            $dotenv->load();
    
            return $_ENV;
        }
        
    }
    
    $app = new Database();
    var_dump(    $app->db());