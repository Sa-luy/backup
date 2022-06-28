<?php
class Base extends Exception
{
}

class Derived extends Base
{
}

try {
    throw new Derived();
} catch (Base $b) {
    echo ("Caught base class exception");
} catch (Derived $d) {
    echo ("Caught derived class exception");
}
// class Calculator
// {
//     function division($a, $b): float
//     {
//         if ($b == 0) {
//             throw new Exception('Error');
//         }
//         return $a / $b;
//     }
// }

// try {
//     $x = 0;
//     $y = 10;
//     $calculator = new Calculator();
//     $calculator->division($y, $x);
// } catch (Exception $e) {
//     echo $e->getMessage();
// }

// try {
//     throw 10;
// } catch (Exception $e) {
//     echo ("Got the  Exception " . $e);
// }
// class customException extends Exception
// {
//     public function customMsg()
//     {
//         return 'Lỗi :' . $this->getMessage() . ' ở file ' . $this->getFile();
//     }
// }
// $a = 4;
// $b = 0;
// $c = null;
// try {
//     if ($b == 0) {
//         throw new customException('số chia phải khác 0', 1);
//     } else {
//         echo $a / $b;
//     }
// } catch (customException $e) {
//     echo $e->customMsg() . '<br>';
// }