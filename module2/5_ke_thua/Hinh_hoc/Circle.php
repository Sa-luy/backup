<?php
class Circle extends Shape
{
    public int $radius;
    function __construct(string $name, int $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }
    function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
    function calculatePerimeter(): int
    {
        return pi() * $this->radius * 2;
    }
}
