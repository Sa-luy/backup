<?php

class Cylinder
{
    public function getVolume($radius, $height)
    {
        $baseArea = $this->getBaseArea($radius);
        $perimeter = $this->getPerimeter($radius);
        return $perimeter * $height + 2 * $baseArea;
    }
    public function getPerimeter($radius): float
    {
        return pi() * $radius * $radius;
    }
    public function getBaseArea($radius): float
    {
        return 2 * pi() * $radius;
    }
}