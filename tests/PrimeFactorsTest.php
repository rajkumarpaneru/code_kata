<?php

use PHPUnit\Framework\TestCase;

use App\PrimeFactors;


class PrimeFactorsTest extends TestCase
{
    /** 
     * @test
     * @dataProvider factors
    */

    function it_generates_the_prime_factors_for_a_number($number, $expected)
    {
        $factors = new PrimeFactors();

        $this->assertEquals($expected,$factors->generate($number));
    }


    public function factors()
    {
        return [
            [1, []],
            [2, [2]],
            [3, [3]],
            [4, [2,2]],
            [5, [5]],
            [6, [2,3]],
            [7, [7]],
            [8, [2, 2, 2]],
            [9, [3, 3]],
            [10, [2, 5]],
            [100, [2, 2, 5, 5]],
            [256 * 7, [2, 2, 2, 2, 2, 2, 2, 2, 7]]
        ];

    }

}