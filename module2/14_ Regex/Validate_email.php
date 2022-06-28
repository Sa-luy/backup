<?php

function ValidateEmail($email)
{
    $parttern = "/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/";
    if (preg_match($parttern, $email)) {
        echo "$email is email";
    } else {
        echo "$email not email";
    };
}
echo ValidateEmail("saluy@gmail.com") . "<br>";
echo ValidateEmail("sa123luy@gmail.com") . "<br>";
echo ValidateEmail("saluy@yahoo.com") . "<br>";
echo ValidateEmail("saluy@gmail.") . "<br>";
echo ValidateEmail("saluy@hotmail.com") . "<br>";
echo ValidateEmail("sa#luy@gmail.com") . "<br>";