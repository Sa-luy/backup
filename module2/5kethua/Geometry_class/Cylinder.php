<?php
// include('Cricle.php');
// include('Shape.php');

use Hinh2\Circle;
// use Hinh\Shape;

class Cylinder extends Circle
{
    public int $height;

    function __construct(string $name, int $radius, int $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }
    function caculateArea(): int
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }
    function caculatePrimeter(): int
    {
        return parent::calculateArea() * $this->height;
    }
}