<?php
include_once('Shape.php');
include_once('Circle.php');
include_once('Cylinder.php');
include_once('Rectangle.php');
include_once('Square.php');

$hinhtron = new Circle('Hinh tron', 5);
echo "Bankinh" .  ' : ' . $hinhtron->radius . '<br />';
echo 'Dien tich ' . $hinhtron->name . ' : ' . $hinhtron->calculateArea() . '<br />';
echo 'Chu vi ' . $hinhtron->name . ' : ' . $hinhtron->calculatePerimeter() . '<br /><br />';

$hinhTru = new Cylinder('Hinh tru', 4, 2);
echo 'Dien tich ' . $hinhTru->name . ' : '  . $hinhTru->calculateArea() . '<br />';
echo 'Chu vi ' . $hinhTru->name . ' : ' . $hinhTru->calculatePerimeter() . '<br /><br />';
$hinhChuNhat = new Rectangle('Hinh chu nhat', 3, 4);
echo 'Dien tich ' . $hinhChuNhat->name . ' : '  . $hinhChuNhat->calculateArea() . '<br />';
echo 'Chu vi ' . $hinhChuNhat->name . ' : '  . $hinhChuNhat->calculatePerimeter() . '<br /><br />';
$hinhvuong = new Square('Hình vuông', 4, 3);
echo 'Dien tich ' . $hinhvuong->name . ' : '  . $hinhvuong->calculateArea() . '<br />';
echo 'Chu vi ' . $hinhvuong->name . ' : '  . $hinhvuong->calculatePerimeter() . '<br />';
