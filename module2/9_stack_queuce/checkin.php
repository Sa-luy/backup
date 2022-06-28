<?php
//cau truc stack

class Stack
{
    protected array $stack = [];
    protected  int $limit;
    function __construct($limit = 20)
    {
        $this->stack = [];
        $this->limit = $limit;
    }
    function push($item)
    {
        if ($this->isfull()) {
            echo 'Stack is full';
        } else {
            array_unshift($this->stack, $item);
        }
    }
    function pop()
    {
        array_shift($this->stack);
    }
    function isEmpty()
    {
        return  empty($this->stack);
    }
    function top()
    {
        if ($this->isEmpty()) {
            echo 'Stack is empty';
        } else {
            return current($this->stack);
        }
    }
    function isfull()
    {
        if (count($this->stack) == $this->limit) {
            return true;
        } else {
            return false;
        }
    }
}
$obj = new Stack();
$obj->push('saluy');
$obj->push('saluy1');
$obj->push('saluy2');
$obj->push('saluy3');
$obj->pop();
echo "<pre>";
print_r($obj);
die();

// class Queuce // lop queuce
// {
//     protected $limit;
//     protected $queuce;
//     function __construct($limit = 30)
//     {
//         $this->limit = $limit;
//         $this->queuce = [];
//     }
//     function enqueuce($item)
//     {
//         if ($this->isfull()) {
//             echo 'Queuce is full';
//         } else {
//             array_push($this->queuce, $item);
//         }
//     }
//     function dequecue($item)
//     {
//         if ($this->isEmpty()) {
//             echo 'Queuce is empty';
//         } else {
//             array_shift($this->queuce);
//         }
//     }
//     function isfull()
//     {
//         if (count($this->queuce) == $this->limit) {
//             return true;
//         } else {
//             return false;
//         }
//     }
//     function isEmpty()
//     {
//         return  empty($this->queuce);
//     }
// } 
//cau truc Tree
class BinaryNode
{
    public $value;    // contains the node item
    public $left;     // the left child BinaryNode
    public $right;    // the right child BinaryNode

    public function __construct($item) {
        $this->value = $item;
        // new nodes are leaf nodes
        $this->left = null;
        $this->right = null;
    }
}
class BinaryTree
{
    protected $root = null;

    public function isEmpty()
    {
        return is_null($this->root);
    }
    public function insert($item)
    {
        $node = new BinaryNode($item);
        if ($this->isEmpty()) {
            // special case if tree is empty
            $this->root = $node;
        } else {
            // insert the node somewhere in the tree starting at the root
            $this->insertNode($node, $this->root);
        }
    }

    protected function insertNode($node, &$subtree)
    {
        if (is_null($subtree)) {
            // insert node here if subtree is empty
            $subtree = $node;
        } else {
            if ($node->value > $subtree->value) {
                // keep trying to insert right
                $this->insertNode($node, $subtree->right);
            } else if ($node->value < $subtree->value) {
                // keep trying to insert left
                $this->insertNode($node, $subtree->left);
            } else {
                // reject duplicates
            }

        }
    }
    public function dump()
    {
        if (!is_null($this->left)) {
            $this->left->dump();
        }
        if (!is_null($this->right)) {
            $this->right->dump();
        }
    }
    public function traverse()
    {
        echo $this->root->dump();
    }
}