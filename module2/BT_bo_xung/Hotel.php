<?php
$matrix = [
    [0, 1, 1, 2],
    [0, 5, 0, 0],
    [2, 0, 3, 3]
];
function checkNumberRoom($arr)
{
    $sum = 0;
    for ($key = 0; $key < count($arr); $key++) {
        if ($key == 0 && $arr[$key > 0]) {
            for ($i = 0; $i < count($arr[$key]); $i++) {
                $sum += $arr[0][$i];
                // echo $sum;
            }
        }
        if ($key >= 1) {
            for ($j = 1; $j < count($arr[$key]); $j++) {
                if ($arr[$key][$j] > 0 && $arr[$key - 1][$j] > 0) {
                    $sum += $arr[$key][$j];
                }
            }
        }
    }
    return $sum;
}
echo checkNumberRoom($matrix);