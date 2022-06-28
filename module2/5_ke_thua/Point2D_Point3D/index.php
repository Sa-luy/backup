<?php
include_once('Point2D.php');
include_once('Point3D.php');
$Saluy = new Point3D(1.2, 2.3, 3.4);
echo $Saluy->get_x() . '<br>';
echo $Saluy->get_y() . '<br>';
echo '<pre>';
print_r($Saluy->get_xyz());
