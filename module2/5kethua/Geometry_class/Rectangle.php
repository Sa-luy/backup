<?php

use Hinh\Shape;

class Rectangle extends Shape
{
    public int $width;
    public int $height;
    function __construct(string $name, int $width, int $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }
    function caculateArea(): int|float
    {
        return $this->height * $this->width;
    }
    function caculatePrimeter(): int|float
    {
        return ($this->height + $this->width) * 2;
    }
}
$hinh2 = new Rectangle('hinh2', 2, 3);
echo $hinh2->width;
echo $hinh2->height;