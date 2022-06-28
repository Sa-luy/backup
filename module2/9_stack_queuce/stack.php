<?php

use Stack as GlobalStack;

class Stack
{
  public array $stack;
  public int $limit = 20;
  function __construct($limit = 20)
  {
    $this->stack = [];
    $this->limit = 20;
  }
  function push($item)
  {
    // if ($this->isfull()) {
    //     echo 'Stack is full';
    // } else {
    array_unshift($this->stack, $item);
    // }
  }
  function pop()
  {
    return array_shift($this->stack);
  }
  function top()
  {
    if ($this->isEmpty()) {
      return 'Stack is empty';
    } else {
      current($this->stack);
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
}
$obj = new Stack();
$obj->push('Saluy_1');
$obj->push('Saluy_2');
$obj->push('Saluy_3');
$obj->push('Saluy_4');
$obj->push('Saluy_5');
$obj->pop();
$obj->pop();
$obj->pop();

$obj->push('Saluy_6');
$obj->push('Saluy_7');


$obj->push('Saluy_8');
$obj->push('Saluy_9');
$obj->push('Saluy_10');
$obj->push('Saluy_11');
$obj->push('Saluy_12');
echo $obj->isEmpty();

echo '<pre>';
print_r($obj->stack);