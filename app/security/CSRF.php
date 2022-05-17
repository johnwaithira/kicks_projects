<?php
    
    namespace Waithira\Kicksfootware\app\security;
        
    require_once dirname(dirname(__DIR__))."/vendor/autoload.php";

    use Waithira\Kicksfootware\app\security\Random;
    use Waithira\Kicksfootware\app\security\Cipher;

    session_start();
    class CSRF
    {
        /**
         * @return void
         * @throws \Exception
         */
        public static Cipher $cipher;

        public function __construct()
        {
            self::$cipher = new Cipher();
        }
  
        public static function csrf_token(): void
        {
            

            $app = new Random();

            
            $token = self::$cipher::;
        
            $_SESSION['csrf_token'] = $token;
        
            echo sprintf("<input name='csrf_token' id='token' value='%s' type= 'hidden'>", $token);
        }
    
        /**
         * @param $token
         * @return bool
         */
        public static function validate($token): bool
        {
            return isset($_SESSION['csrf_token']) && $_SESSION['csrf_token'] == $token;
        }
    }
    
