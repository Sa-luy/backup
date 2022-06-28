<?php
function checkAccount($name)
{
    $parttern = '/^[_a-z0-9]{6}$/';
    $check = $name[1];

    if (preg_match($parttern, $name)) {
        echo "$name is Account.";
    } else {
        echo "$name is not Account!!!";
    }
}

echo checkAccount('123abc_') . "<br>";
echo checkAccount('_abc123') . "<br>";
echo checkAccount('______') . "<br>";
echo checkAccount('123456') . "<br>";
echo checkAccount('abcdefg') . "<br>";
echo checkAccount('.@') . "<br>";
echo checkAccount('12345') . "<br>";
echo checkAccount('1234_') . "<br>";
echo checkAccount('abcde ') . "<br>";
echo checkAccount('eeeeeeee') . "<br>";