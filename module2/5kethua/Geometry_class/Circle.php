<?php

namespace Hinh2;

include('Shape.php');

use Hinh\Shape;

class Circle extends Shape
{
    public int $radius;

    public function __construct(string $name, int $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea(): int
    {
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter(): int
    {
        return pi() * $this->radius * 2;
    }
}