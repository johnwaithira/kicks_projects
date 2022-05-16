<?php
    
    namespace Waithira\Kicksfootware\database;
 
    use Dotenv\Dotenv;
    use PDO;

    require_once  dirname(__DIR__)."/vendor/autoload.php";
    $dotenv = Dotenv::createImmutable(dirname(__DIR__));
    $dotenv->load();

    define("TYPE", $_ENV['DB_TYPE']);
    define("HOST", $_ENV['DB_HOST']);
    define("NAME", $_ENV['DB_NAME']);
    define("USER", $_ENV['DB_USER']);
    define("PWD", $_ENV['DB_PWD']);
    class Database
    {
        
        public $pdo = null;
        private $dns  = TYPE . "host". HOST . ";dbname" . NAME;
        private $user  = USER;
        private $pwd = PWD;
        
        public function __construct()
        {
            try {
                $this->pdo = new \PDO($this->dns, $this->user, $this->pwd);
                $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                $this->pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
                echo  "connected";
            }
            catch (\Exception $exception)
            {
                echo $exception->getMessage();
            }
        }
    }
    
   $app =  new Database();
    var_dump($app);
   