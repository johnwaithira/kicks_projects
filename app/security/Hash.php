<?php
    
    namespace Waithira\Kicksfootware\app\security;
    use function md5;
    class Hash
    {
        public static function make($data)
        {
            return md5($data);
        }
    }