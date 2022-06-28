<?php

class Binary
{
    public array $stack;
    public int $limit = 20;
    function __construct($limit = 20)
    {
        $this->stack = [];
        // $this->quotient = null;
        $this->limit = $limit;
    }
    function isfull()
    {
        if (count($this->stack) == $this->limit) {
            return true;
        } else {
            return false;
        }
    }
    function getBinary()
    {

        return $this->stack;
    }
    function push($item)
    {
        if ($this->isfull()) {
            echo 'Stack is full';
        } else {
            array_unshift($this->stack, $item);
        }
    }
    function top()
    {
        if ($this->isEmpty()) {
            return 'Stack is empty';
        } else {
            return array_pop($this->stack);
        }
    }
    function isEmpty()
    {
        if (empty($this->stack)) {
            return "Stack is empty";
        } else {
            return  "Stack not is empty";
        }
    }


    function binaryConversion($number) // phương thức chia lấy số nhị phân
    {
        $balanceStr = ""; // đặt biến lưu bằng chuỗi
        while ($number >= 1) { // chạy vòng lặp while đén khi số nhỏ hon 1 thì dừng
            $bin = $number % 2; // lấy số dư là số nhị phân
            $balanceStr .= $bin; //cộng chuỗi để in ra dãy nhị phân
            $number = floor($number / 2); //gán thương  sốđể dùng chia tiếp
        }
        $balanceStr = strrev($balanceStr); // đảo ngược chuỗi cần in.mới đúng
        return $balanceStr; //trả về chuỗi
    }
}
$obj = new Binary;
echo $obj->binaryConversion(4);
// echo $obj->quotient;
// echo '<pre>';
// print_r($obj->getBinary());