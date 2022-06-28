<?php
// class Parent1
// {
//     protected string $xehoi = 'Audi';
//     function __construct($xehoi)
//     {
//         $this->xehoi = $xehoi;
//     }
//     function laixe()
//     {
//         echo 'laixe';
//     }
// }
// class Con extends Parent1
// {
//     public function getxehoi()
//     {
//         return $this->xehoi;
//     }
// }

// $Audi = new Con('xe rua');
// echo $Audi->xehoi;
// echo $Audi->laixe() . "<br>";
// echo $Audi->getxehoi();
// class Animal
// {


//     function say()
//     {
//         echo "nói điều gì//";
//     }
// }
// class Cat extends Animal
// {
//     function say()
//     {
//         parent::say();
//         echo  "meo meo";
//     }
// }
// class Dog extends Animal
// {
//     function say()
//     {
//         echo  "go go";
//     }
// }
// $meo = new Cat;
// echo $meo->say() . "//";
// $cho = new Dog;
// $cho->say();
class Day1
{
    static function print()
    {
        echo '123';
    }
}
$date1 = new Day1;
echo $date1->print();