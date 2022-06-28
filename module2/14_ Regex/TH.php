<?php


function isFirstLetterUpperCase($str)
{
    $regexp = '/^[A-Z]+$/';
    if (preg_match($regexp, $str)) {
        echo ("String's  is uppercase<br>");
    } else {
        echo ("String's  is not uppercase<br>");
    }
}
isFirstLetterUpperCase('Codegym');
isFirstLetterUpperCase('cdegym');
isFirstLetterUpperCase('CODEGYM');