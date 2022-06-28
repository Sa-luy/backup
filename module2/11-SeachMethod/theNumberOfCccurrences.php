<?php
$arr = [9, 54, 54, 1, 8, 847, 654, 54, 1, 6, 7, 847, 2447, 12, 7, 8, 147.258, 369];

// $value=0;

function  checkArr($arrs, $valuenew)
{
    $count = 0;
    foreach ($arrs as $key => $value) {
        if ($value == $valuenew) {
            $count++;
        }
    }
    return $count;
}

$a = checkArr($arr, 1);
echo $a;