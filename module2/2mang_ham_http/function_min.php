<?php
$array1 = [8, 2, 9, 85, 154, -6, 7];
function nhonhat($array)
{
    $mins = $array[0];
    for ($i = 0; $i < count($array); $i++) {
        if ($mins > $array[$i]) {
            $mins = $array[$i];
        }
    }
    return $mins;
}
$min = nhonhat($array1);
echo $min;