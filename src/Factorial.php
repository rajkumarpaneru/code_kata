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

    public function calculateRecursive($number){
        if($number < 1){
            return 0;
        }

        if($number == 1){
            return 1;
        }

        return $number * $this->calculateRecursive($number - 1);
    }

    
}