<?php
include_once('Chicken.php');
include_once('Tiger.php');
include_once('Animal.php');
echo 'Class Animal<br>';
$animals[0] = new Tiger();
$animals[1] = new Chicken();
foreach ($animals as $animal) {
    echo $animal->makeSound() . '<br>';
}