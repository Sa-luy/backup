<?php

use Stack as GlobalStack;

class Olympia
{
    public string $nameCountry;
    public int $totalGoldMedals;
    function __construct($nameCountry, $totalGoldMedals)
    {
        $this->nameCountry = $nameCountry;
        $this->totalGoldMedals = $totalGoldMedals;
    }
}
$obj = new SplStack();
$obj->push(new Olympia('Viet Nam', 236));
$obj->push(new Olympia('USA', 230));
$obj->push(new Olympia('Taay Ban Nha', 195));
$obj->push(new Olympia('Bồ Đào Nha ', 200));
$obj->push(new Olympia('England', 23));
$obj->push(new Olympia('Đức', 96));
$obj->push(new Olympia('ChiNa', 86));
$obj->push(new Olympia('Japan', 216));
$obj->push(new Olympia('Korea', 76));
$obj->push(new Olympia('Italia', 180));
$obj->push(new Olympia('Australia', 136));

echo '<pre>';
// var_dump($obj);
$arrGoldMedals = [];
$obj->rewind();
while ($obj->valid()) {
    $arrGoldMedals[] = ($obj->current()->totalGoldMedals);
    $obj->next();
}


function swap(&$x, &$y)
{
    $tmp = $x;
    $x = $y;
    $y = $tmp;
}
function SortOlympia(&$arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$j] > $arr[$i]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$i];
                $arr[$i] = $temp;
            }
        }
    }
    return $arr;
}
SortOlympia($arrGoldMedals);
$i = 1;
foreach ($arrGoldMedals as $key => $value) {
    $obj->rewind();
    while ($obj->valid()) {
        if ($obj->current()->totalGoldMedals == $value) {
            // echo $obj->current()->nameCountry  . '<br>';
            echo "Top" . $i . '' . ' : ' . $obj->current()->nameCountry . ' ->'
                . $obj->current()->totalGoldMedals . 'Huy chuong vang<br>';
            // $obj->pop();
            $i++;
            // break;
        }
        $obj->next();
    }
}