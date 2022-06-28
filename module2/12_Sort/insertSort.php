<?php
function swap(&$x, &$y)
{
    $tmp = $x;
    $x = $y;
    $y = $tmp;
}
function insertSort($arr)
{
    for ($i = 1; $i < count($arr); $i++) {
        $value = $arr[$i];
        $j = $i;
        while ($j > 0 && $value < $arr[$j - 1]) {
            $arr[$j] = $arr[$j - 1];
            $j--;
        }
        $arr[$j] = $value;
    }
    return $arr;
}
$arr = [5, -4, 3, 7, 2, 1, 0, 8, 90, 20];
$newArr = insertSort($arr);
echo "<pre>";
print_r($newArr);