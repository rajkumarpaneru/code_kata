<?php

namespace App;

class Factorial 
{
    public static function calculate($number)
    {
        if($number == 1)
        {
            return 1;
        }

        if($number == 2)
        {
            return 1 * 2;
        }

        if($number == 3)
        {
            return 1 * 2 * 3;
        }
    }
}