<?php

use PHPUnit\Framework\TestCase;
use App\RomanNumerals;

class RomanNumeralsTest extends TestCase
{
 
    /** 
     * @test
    */

     public function it_returns_roman_number_for_1()
     {
        $roman = new RomanNumerals();

        $this->assertEquals('I',$roman->toRoman(1));
     }

    /** 
     * @test
    */

    public function it_returns_roman_number_for_2()
    {
       $roman = new RomanNumerals();

       $this->assertEquals('II',$roman->toRoman(2));
    }

    /** 
     * @test
    */

    public function it_returns_roman_number_for_3()
    {
       $roman = new RomanNumerals();

       $this->assertEquals('III',$roman->toRoman(3));
    }

}