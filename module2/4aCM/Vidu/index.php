<?php
include 'giolinh/student.php';
include 'hailang/student.php';

use Vidu\Giolinh\Student;
use Vidu\hailang\student as studentHailang;

// $student1 = new Vidu\giolinh\student();
// $student2 = new Vidu\hailang\student();

$student1 = new Student;
$student2 = new studentHailang();

echo '<pre>';
print_r($student1);
print_r($student2);

die();