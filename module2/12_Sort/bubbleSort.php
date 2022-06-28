<?php
function swap(&$x, &$y)
{
    $tmp = $x;
    $x = $y;
    $y = $tmp;
}
$arr = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
function bubbleSort($arr)
{
    $leght = count($arr);
    for ($i = 0; $i < $leght - 1; $i++) {
        for ($j = 0; $j < $leght - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                swap($arr[$j], $arr[$j + 1]);
            }
        }
    }
    return $arr;
}
$newArr = bubbleSort($arr);
echo '<pre>';
print_r($newArr);