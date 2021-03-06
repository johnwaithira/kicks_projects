<?php
    
    namespace Waithira\Kicksfootware\app\security;
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
         * @param int $min
         * @param int $max
         * @return int
         */
        public static function random(
            $min,
            $max) 
        {
            return rand($min, $max);
        }
    }
