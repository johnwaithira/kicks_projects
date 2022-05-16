<?php
    
    namespace Waithira\Kicksfootware\app\security;
    
    use Waithira\Kicksfootware\app\security\Random;
    class CSRF
    {
        /**
         * @return void
         * @throws \Exception
         */
        private Random $random;
        public function __construct()
        {
            
        }
        public static function csrf_token(): void
        {
            // $token = md5(time() . bin2hex(random_bytes(Random::random(4, 7))));
        
         
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
    

echo CSRF::csrf_token();