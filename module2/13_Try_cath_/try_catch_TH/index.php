<?php

class DivideByZeroException extends Exception
{

    public function __toString(): string
    {
        return "Can't divide by zero";
    }
}

function divide($numerator, $denominator)
{
    if ($denominator === 0) {
        throw new DivideByZeroException("Can't divide by zero");
    }
    return $numerator / $denominator;
}

try {
    $result = divide(100, 5);
    echo $result . '<hr>';
    $result = divide(100, 0);
    echo $result . '<hr>';
} catch (DivideByZeroException $e) {
    echo 'Có lỗi xảy ra: ';
}