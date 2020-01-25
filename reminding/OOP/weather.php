<?php
/**
 * Created by PhpStorm.
 * User: Stef
 * Date: 1/25/2020
 * Time: 7:35 PM
 */

// Training OOP skills

class  Weather {
    public static $tempConditions = ['cold', 'mild', 'warm'];
    
    public static function celsiusToFarenheit($c) {
        return $c * 9 / 5 + 32;
    }

    public static  function determineTempCondition($f) {
        if($f < 40) {
            return self::$tempConditions[0];
        } elseif ($f < 70) {
            return self::$tempConditions[1];
        } else {
            return  self::$tempConditions[2];
        }
    }
}

$temp  = Weather::celsiusToFarenheit(4);
var_dump(Weather::determineTempCondition($temp));
