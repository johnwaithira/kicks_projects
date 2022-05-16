<?php
    
    namespace Waithira\Kicksfootware\app\Format\Str;
    
    class Slug
    {
        public static function Slug($slug)
        {
            return preg_replace('/[^a-z0-9]+/i',
                '-',
                trim(strtolower($slug))
            );
        }
    
    }