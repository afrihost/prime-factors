<?php

use PrimeFactor\PrimeFactor;

class PrimeFactorTest extends PHPUnit_Framework_TestCase
{
    /**›
     * @var PrimeFactor
     */
    private $primeFactor;

    public function setUp()
    {
        $this->primeFactor = new PrimeFactor();
    }

    public function testCalculatePrimeFactorsOfOne()
    {
        $result = $this->primeFactor->generate(1);

        $this->assertEquals([], $result);
    }

    public function testCalculatePrimeFactorsOfTwo()
    {
        $result = $this->primeFactor->generate(2);

        $this->assertEquals([2], $result);
    }

    public function testCalculatePrimeFactorsOfThree()
    {
        $result = $this->primeFactor->generate(3);

        $this->assertEquals([3], $result);
    }

    public function testCalculatePrimeFactorsOfFive()
    {
        $result = $this->primeFactor->generate(5);

        $this->assertEquals([5], $result);
    }

    public function testCalculatePrimeFactorsOfFNine()
    {
        $result = $this->primeFactor->generate(9);

        $this->assertEquals([3, 3], $result);
    }

    public function testCalculatePrimeFactorsOfHundred()
    {
        $result = $this->primeFactor->generate(100);

        $this->assertEquals([2, 2, 5, 5], $result);
    }
}