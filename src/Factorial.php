<?php

namespace App;

class Factorial 
{
    public static function calculate($number)
    {   
        if($number < 1){
            return 0;
        }
        
        $factorial = 1;

        for($i = 1; $i <= $number; $i++){
            $factorial = $factorial * $i;
        }

        return $factorial;
    }

    
}