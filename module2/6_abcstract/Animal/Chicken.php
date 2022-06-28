<?php
include_once('../Animal/Animal.php');

use Animal\Animal;


class Chicken extends Animal
{
    public function makeSound()
    {
        return " ò ó oooooooo.";
    }
}