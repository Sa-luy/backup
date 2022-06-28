<?php


use JetBrains\PhpStorm\Pure;

class Circle extends Shape
{
    public float $radius;

    public function __construct(string $name, float $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

  public function calculateArea(): float
    {
        return pi() * pow($this->radius, 2);
    }

  public function calculatePerimeter(): float
    {
        return pi() * $this->radius * 2;
    }
}