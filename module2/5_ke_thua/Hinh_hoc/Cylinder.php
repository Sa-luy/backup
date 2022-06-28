<?php
class Cylinder  extends Circle
{
    public int $height;
    function __construct(string $name, int $radius, int $height)

    {
        parent::__construct($name,  $radius);
        $this->height = $height;
    }
    function calculateArea()
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }
    function calculateVolume(): int
    {
        return parent::calculateArea() * $this->height;
    }
}
