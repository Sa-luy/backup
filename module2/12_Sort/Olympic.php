<?php
class Olympic
{
    public string $name;
    public int $totalGoldMedals;
    function __construct($name, $totalGoldMedals)
    {
        $this->name = $name;
        $this->totalGoldMedals = $totalGoldMedals;
    }
}
class Stack extends SplStack
{
}
$country = new Stack();
$country->push(new Olympic('Vietnam', 101));
$country->push(new Olympic('USD', 50));
$country->push(new Olympic('Franc', 67));
$country->push(new Olympic('Canada', 96));
$country->push(new Olympic('Tây ban nha', 23));
$country->push(new Olympic('Braxin', 84));
$country->push(new Olympic('Ásutralia', 74));
$country->push(new Olympic('Anh', 79));
$country->push(new Olympic('Đức', 10));
$country->push(new Olympic('China', 13));
$country->push(new Olympic('Japan', 91));
$country->push(new Olympic('Korea', 36));
$country->push(new Olympic('Italia', 21));
$country->push(new Olympic('Bồ Dào Nha', 61));