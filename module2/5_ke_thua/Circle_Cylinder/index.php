<?php
include_once('Circle.php');
include_once('Cylinder.php');
$hinhtron = new Circle(5, 'red');
$hinhtron->toString();
echo 'Dien tich Hinh tron : ' . $hinhtron->calculateArea() . '<br><br>';
echo "Hinh Tru:<br>";
$hinhtru = new Cylinder(3, 'blue', 4);
$hinhtru->toString();
echo "The tich" . $hinhtru->Volume() . '(m3)';
