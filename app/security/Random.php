<?php
    
    namespace Waithira\Kicksfootware\app\security;
    
    use function bin2hex;
    
    class Random
    {
        /**
         * @throws \Exception
         */
        public static function generate(
            int $len,
            bool $return = true
        )
        {
            if($return === false)
            {
                return;
            }
            return bin2hex(random_bytes($len));
        }
    
        /**
         * @param $min
         * @param $max
         * @return void
         */
        public static function range($min = 0, int $max)
        {
        
        }
    }