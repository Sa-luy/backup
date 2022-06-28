<?php


class Circle
{
    public int $radius;
    public string $color;
    function __construct(int $radius, string $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }
    function getradius()
    {
        return $this->radius;
    }
    function getcolor()
    {
        return $this->color;
    }
    function setradius($radius)
    {
        return $this->radius = $radius;
    }
    function setcolor($color)
    {
        $this->color = $color;
    }
    function toString()
    {
        echo 'Ban kinh : ' . $this->radius . " , Mau Sac : " . $this->color . '<br>';
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
