<?php
// include_once('Shape.php');
include_once('Circle.php');
// include_once('Cylinder.php');
// include_once('Rectangle.php');

use Hinh2\Circle;
use Hinh\Shape;



$hinhtron = new Circle('hinhtron', 5);
// echo '<pre>';
// print_r($hinhtron);
// die();
echo $hinhtron->calculateArea();
// echo $radius;

// $circle = new Circle('Circle 01', 3);
// echo 'Circle area: ' . $circle->calculateArea() . '<br />';
// echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';