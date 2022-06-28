<?php
class Stack
{
    public array $stack;
    public int $limit = 20;
    function __construct($limit = 20)
    {
        $this->stack = [];
        $this->limit = 20;
    }
    function getStack()
    {
        return $this->stack;
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
        return  array_shift($this->stack);
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
            return true;
        } else {
            return false;
        }
    }
}
class TreeNode
{
    public $value;
    public $next;
    function __construct($value)
    {
        $this->value = $value;
        $this->next = null;
    }
}
class Queuce
{
    private $font = null;
    private $back = null;
    function __construct($string)
    {
        $this->string = $string;
    }

    public function isEmpty()
    {
        return is_null($this->font);
    }

    public function enqueue($value)
    {
        $oldBack = $this->back;
        $this->back = new TreeNode($value);
        $this->back->value = $value;
        if ($this->isEmpty()) {
            $this->font = $this->back;
        } else {
            $oldBack->next = $this->back;
        }
    }

    public function dequeuce()
    {
        if ($this->isEmpty()) {
            return "quece is empty";
        } else {

            $removedValue = $this->font->value;
            $this->font = $this->font->next;
            return $removedValue;
        }
    }
}
class  symmetry
{

    public $string;
    function __construct($string)
    {

        $this->string = str_split($string);
    }
    function size()
    {
        return count($this->string);
    }
    function addStack()
    {
        $StackArr = new Stack();
        for ($i = 0; $i < $this->size(); $i++) {
            $StackArr->push($this->string[$i]);
        }
        return $StackArr;
    }
    function addQueuce()
    {
        $queuce = new Queuce($this->string);
        for ($i = 0; $i < $this->size(); $i++) {
            $queuce->enqueue($this->string[$i]);
        }
        return $queuce;
    }
    function symmetry_check()
    {
        $stack = $this->addStack();
        $queuce = $this->addQueuce();
        while(!$stack->isEmpty())
       if ( $stack->pop()!= $queuce->dequeuce()){
            return "Symmetrical in't  string!";
        }
        return  "Symmetrical string!";
        
    }
}
$obj = new symmetry('able was I ere I saw elba');
echo '<pre>';
echo $obj->symmetry_check();