<?php
const ADDITION = '+';
const SUBTRACTION = '-';
const MUTIPLICATION = '*';
const DIVISIION = '/';

class Calculator
{
    public function calculate($firstOpreand, $secondOperand, $operator)
    {
        switch ($operator) {
            case ADDITION:
                return $firstOpreand + $secondOperand;
            case SUBTRACTION:
                return $firstOpreand - $secondOperand;
            case MUTIPLICATION:
                return $firstOpreand * $secondOperand;
            case DIVISIION:
                if ($secondOperand != 0) {
                    return $firstOpreand / $secondOperand;
                } else {
                    return "Can not divide by ";
                }
            default:
                return "Unsupported operation";
        }
    }
}