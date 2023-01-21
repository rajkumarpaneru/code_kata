<?php

namespace App;

class Factorial 
{
    public static function calculate($number)
    {   
        $factorial = 1;

        for($i = 1; $i <= $number; $i++){
            $factorial = $factorial * $i;
        }

        return $factorial;
    }
}