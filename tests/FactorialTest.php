<?php

use PHPUnit\Framework\TestCase;

use App\Factorial;

class FactorialTest extends TestCase 
{
    /** 
     * @test
    */
    public function it_generates_factorial_for_1()
    {
        $this->assertEquals(1, Factorial::calculate(1));
    }

    /** 
     * @test
    */
    public function it_generates_factorial_for_2()
    {
        $this->assertEquals(2, Factorial::calculate(2));
    }

    /** 
     * @test
    */
    public function it_generates_factorial_for_3()
    {
        $this->assertEquals(6, Factorial::calculate(3));
    }
}