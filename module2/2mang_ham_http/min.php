<?php
$array1 = [8, 2, 9, 85, 154, -6, 7];

$mins = $array1[0];
for ($i = 0; $i < count($array1); $i++) {
    if ($mins > $array1[$i]) {
        $mins = $array1[$i];
    }
}
echo $mins;