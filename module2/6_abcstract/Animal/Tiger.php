<?php
include_once('../Animal/Animal.php');

use Animal\Animal;


class Tiger extends Animal
{
    public function makeSound()
    {
        return " groammmmmmmm";
    }
}