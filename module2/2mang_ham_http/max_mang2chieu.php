<?php
$array = [
    [1, 2, 45, 4, 8],
    [5, 9, 25, 46, -9]
];
$max = $array[0][0];
for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count($array[$i]); $j++) {
        if ($max < $array[$i][$j]) {
            $max = $array[$i][$j];
        }
    }
}
echo $max;