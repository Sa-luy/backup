<?php

class FizzBuzz
{
    public $status;


    public function __construct($number)
    {
        $isFizz=$number%3==0;
        $isBuzz=$number%5==0;
        if ($isFizz && $isBuzz) {
            $this->status = "FizzBuzz";
        } elseif ($number % 3 == 0) {
            $this->status = "Fizz";
        } elseif ($number % 5 == 0) {
            $this->status = "Buzz";
        } else {
            $this->status = $number . "";
        }
    }

    public function __toString()
    {
        return $this->status;
    }
}