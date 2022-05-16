<?php
    
    namespace Waithira\Kicksfootware\app\Format\Str;
    
    class Ellipsis
    {
        public static function Ellipsis($data, $len)
        {
           if(strlen($data) > $len){
              $cut = substr($data, 0, $len);
              $end = strpos($cut, '');
              $data = $end ? substr($cut, 0, $end) : (substr($cut, $end));
              $data .= " ...";
            }
            return $data;
        }
    }