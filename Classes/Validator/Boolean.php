<?php

/**
 * Class Boolean
 */
class Boolean
{
    public static function validate($value = null){
        if($value === 0 || $value  === 1){
            return true;
        }
        return false;
    }
}