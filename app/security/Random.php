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
         * @return int
         */
        public static function random($min = 3, int $max)
        {
            return rand($min, $max);
        }
    }