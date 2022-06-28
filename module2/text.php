<?php

function b($aghf)
{
    echo $aghf;
    $a = 5;
    $a = $a - 5;
    return $a;
}

$a = 10;
var_dump(b($a)); //5
echo $a;