<?php

namespace App;

class RomanNumerals 
{
    public function toRoman($number)
    {
        $roman = '';
        
        if($number == 1)
            $roman = 'I';

        if($number == 2)
            $roman = 'II';


        return $roman;
    }
}