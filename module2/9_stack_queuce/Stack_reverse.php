<?php
class Stack
{
    public array $stack;
    public int $limit = 20;
    function __construct($limit = 20)
    {
        $this->stack = [];
        $this->arr=[];
        $this->limit = 20;
    }
    function size()
    {
        return count($this->stack);
         
    }
    function push($item)
    {
        // if ($this->isfull()) {
        // echo 'Stack is full';
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
            return "Stack not is empty";
        }
    }
    function reverse()
    {
        for($i=$this->size();$i>=1;$i--){
          $item=$this->pop();
          array_unshift($this->arr,$item);
        }
  
        return $this->arr;
    }
}
$obj = new Stack();
for ($i = 1; $i <= $obj->limit; $i++) {
    $obj->push($i);
}
echo '<pre>';
print_r($obj);
echo'<hr>';
// echo $obj->size();
$obj->reverse();
// echo $obj->pop();
// echo '<pre>';
print_r($obj);
// $arr=[];

//   array_push($arr,$item);
