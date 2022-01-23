<?php


namespace app\core\traits;


trait validation
{

    public function check_len( $min, $max, $value = ""){
        if(mb_strlen($value) >= $min || mb_strlen($value) <= $max){
            return true;
        } else{
            return false;
        }
    }

}