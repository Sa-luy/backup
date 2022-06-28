<?php
$str = 's*(s-a)*{s-b}*[s-c]';
// function checkBrackets($str)
// {
//     $obj = new SplStack();
//     for ($i = 0; $i < strlen($str); $i++) {

//         if ($str[$i] === '(') {
//             $obj->push($str[$i]);
//         }
//         if ($str[$i] === '{') {
//             $obj->push($str[$i]);
//         }
//         if ($str[$i] === '[') {
//             $obj->push($str[$i]);
//         }
//         if ($str[$i] === ')') {
//             if ($obj->pop() != '(') {
//                 return false;
//             }
//         }
//         if ($str[$i] === ']') {
//             if ($obj->pop() != '[') {
//                 return false;
//             }
//         }
//         if ($str[$i] === '}') {
//             if ($obj->pop() != '{') {
//                 return false;
//             }
//         }
//     }
//     return true;
// }
function checkBrackets($str)
{
    $obj = new SplStack();
    for ($i = 0; $i < strlen($str); $i++) {
        switch ($str[$i]) {
            case '(':
            case '{':
            case '[':
                $obj->push($str[$i]);
                break;
            case ')':
                if ($obj->pop() != '(') {
                    return false;
                }
                break;
            case '}':
                if ($obj->pop() != '{') {
                    return false;
                }
                break;
            case ']':
                if ($obj->pop() != '[') {
                    return false;
                }
                break;
        }
    }
    echo "toet voi<hr>";
    return true;
}
echo '<pre>';
var_dump(checkBrackets($str));