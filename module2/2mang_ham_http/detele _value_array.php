<?php
$array1 = [8, 2, 9, 85, 154, -6, 7];
$x = -6;

foreach ($array1 as $key => $value) {
    if ($x == $value) {
        array_splice($array1, $key, 1);
    }
}
print_r($array1);