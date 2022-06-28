<?php
function swap(&$x, &$y)
{
    $tmp = $x;
    $x = $y;
    $y = $tmp;
}
$arrs = [1, 9, 4.5, 6.6, 5.7, -4.5, 8];
function selectionSort($array)
{
    for ($i = 0; $i < count($array); $i++) {

        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$i] > $array[$j]) {
                swap($array[$i], $array[$j]);
            }
        }
    }
    return $array;
}
$arr = selectionSort($arrs);
echo '<pre>';
print_r($arr);