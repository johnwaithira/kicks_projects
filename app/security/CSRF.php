<?php
    
    namespace Waithira\Kicksfootware\app\security;
        
    require_once dirname(dirname(__DIR__))."/vendor/autoload.php";

    use Waithira\Kicksfootware\app\security\Random;

    session_start();
    class CSRF
    {
        /**
         * @return void
         * @throws \Exception
         */
  
        public static function csrf_token(): void
        {
            

            $app = new Random();
            
            $token = md5(time() . bin2hex(random_bytes($app::random(2, 9))));
        
            // var_dump(self::$random::random(2,6));
            var_dump($token);
        //    $_SESSION['csrf_token'] = $token;
        
           // echo sprintf("<input name='csrf_token' id='token' value='%s' type= ''>", $token);
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
    
$app = new CSRF();
$app::csrf_token();