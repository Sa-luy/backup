<?php
include_once('../5kethua/Shape.php');

use Geometry_class\Shape;

class Triangle extends Shape

{
    public float $side1;
    public float $side2;
    public float $side3;
    private string $color;
    function __construct(
        float $side1,
        float $side2,
        float $side3,
        string $color
    ) {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
        $this->color = $color;
    }
    function getSide1()
    {
        return $this->side1;
    }
    function getSide2()
    {
        return $this->side2;
    }
    function getSide3()
    {
        return $this->side3;
    }
    function getcolor()
    {
        return $this->color;
    }
    function setSide1($side1)
    {
        $this->side1 = $side1;
    }
    function setSide2($side2)
    {
        $this->side2 = $side2;
    }
    function setSide3($side3)
    {
        $this->side3 = $side3;
    }
    function setcolor($color)
    {
        $this->color = $color;
    }
    function getPerimeter(): float
    {
        return ($this->side1 + $this->side2 + $this->side3);
    }
    function getArea(): float
    {
        $half = ($this->getPerimeter())  / 2;
        $area = sqrt($half * ($half - $this->side1) * ($half - $this->side2) * ($half - $this->side3));
        return $area;
    }
    function toString(): string
    {
        return 'color' . $this->color
            . ' , side1 : ' . $this->side1
            . ' , side2 : ' . $this->side2
            . ' , side3 : ' . $this->side3;
    }
}
$hinhtamgiac = new Triangle(7, 8, 9, 'red');
echo $hinhtamgiac->getPerimeter() . '// // ';
echo $hinhtamgiac->getArea() . '// // ';
echo $hinhtamgiac->toString() . '// // ';