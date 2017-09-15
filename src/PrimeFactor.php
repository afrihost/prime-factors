<?php
namespace PrimeFactor;

class PrimeFactor
{
    private $primes = [];

    public function generate($number)
    {
        for ($candidate = 2; $number > 1; $candidate++)
        {
            for (; $number % $candidate == 0; $number /= $candidate)
            {
                $this->primes[] = $candidate;
            }
        }

        return $this->primes;
    }
}