<?php

class inArray
{
    public static $values;

    /**
     * @param null $value
     * @return bool
     */
    public static function validate($value = null){
        if(self::$values && in_array($value, self::$values)){
            return true;
        }
            return false;
    }

    /**
     * @param array $values
     */
    public static function setValues(array $values){
        self::$values = $values;
    }
}