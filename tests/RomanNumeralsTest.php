<?php

use PHPUnit\Framework\TestCase;
use App\RomanNumerals;

class RomanNumeralsTest extends TestCase
{
 
    /** 
     * @test
     * @dataProvider numbers
    */

     public function it_returns_roman_number($number, $expected)
     {
        $this->assertEquals($expected,RomanNumerals::toRoman($number));
     }

     /** 
     * @test
    */

    public function it_cannot_generate_a_roman_numeral_for_zero_or_less()
    {
       $this->assertFalse(RomanNumerals::toRoman(0));
       $this->assertFalse(RomanNumerals::toRoman(-1));
    }

    /** 
     * @test
    */

    public function it_cannot_generate_a_roman_numeral_for_more_than_3999()
    {
       $this->assertFalse(RomanNumerals::toRoman(4000));
    }

    public function numbers()
    {
        return [
            [1, 'I'],
            [2, 'II'],
            [3, 'III'],
            [4, 'IV'],
            [5, 'V'],
            [6, 'VI'],
            [7, 'VII'],
            [8, 'VIII'],
            [9, 'IX'],
            [10, 'X'],
            [40, 'XL'],
            [50, 'L'],
            [90, 'XC'],
            [100, 'C'],
            [400, 'CD'],
            [500, 'D'],
            [900, 'CM'],
            [1000, 'M'],
            [3999, 'MMMCMXCIX']
        ];
    }
}