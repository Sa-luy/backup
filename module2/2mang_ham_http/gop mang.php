<?php
$array1 = [1, 2, 45, 4, 8];
  $array2=  [5, 9, 25, 46, -9];
$array3=[];
for($i=0;$i<count($array1);$i++){
    $array3[]=$array1[$i];

}
for($i=0;$i<count($array2);$i++){
    $array3[]=$array1[$i];
}
print_r($array3);