<?php

include_once "Calculator.php";

$calculator = new Calculator();
echo $calculator->calculate(1,2, SUBTRACTION);
echo "<br>";
echo $calculator->calculate(1,2, ADDITION);
echo "<br>";
echo $calculator->calculate(1,2, MUTIPLICATION);
echo "<br>";
echo $calculator->calculate(1,0, DIVISIION);