<?php
$array = [
    [1, 8, 3, 4, 1,],
    [7, 1, 3, 1, 8,],
    [4, 9, 3, 3, 5],
    [1, 1, 3, 1, 5],
    [1, 2, 6, 4, 1]
];
$sum1 = 0;
$sum2 = 0;
$sum3 = 0;
$sum4 = 0;
$sum5 = 0;
for ($i = 0; $i < count($array); $i++) {
    switch ($i) {
        case 0:
            for ($j = 0; $j < count($array); $j++) {
                $sum1 += $array[$j][$i];
            }
            break;
        case 1:
            for ($j = 0; $j < count($array); $j++) {
                $sum2 += $array[$j][$i];
            }
            break;
        case 2:
            for ($j = 0; $j < count($array); $j++) {
                $sum3 += $array[$j][$i];
            }
            break;
        case 3:
            for ($j = 0; $j < count($array); $j++) {
                $sum4 += $array[$j][$i];
            }
            break;
        case 4:
            for ($j = 0; $j < count($array); $j++) {
                $sum5 += $array[$j][$i];
            }
            break;
    }
}
echo $sum1 . "||" . $sum2 . "||" . $sum3 . "||" . $sum4 . "||" . $sum5;