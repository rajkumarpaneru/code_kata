<?php

use PHPUnit\Framework\TestCase;

use App\Factorial;

class FactorialTest extends TestCase 
{
    /** 
     * @test
     * @dataProvider factorials
    */
    public function it_generates_factorial_for_a_number($number, $expected)
    {
        $this->assertEquals($expected, Factorial::calculate($number));
    }

    /** 
     * @test
     * @dataProvider factorials
    */
    public function it_generates_factorial_for_a_number_recursively($number, $expected)
    {
        $factorial = new Factorial();

        $this->assertEquals($expected, $factorial->calculateRecursive($number));
    }


    public function factorials()
    {
        return [
            [0, 0],
            [-1, 0],
            [-5, 0],
            [1, 1],
            [2, 2],
            [3, 6],
            [4, 24],
            [5, 120],
            [6, 720],
        ];

    }
}