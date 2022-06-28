<?php
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
class Queue
{
    private $font = null;
    private $back = null;

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

    public function dequeue()
    {
        if ($this->isEmpty()) {
            return "quece is empty";
        } else {
            return "quece is not empty";
        }
        $removedValue = $this->font->value;
        $this->font = $this->font->next;
        return $removedValue;
    }
}
$obj = new Queue();
$obj->enqueue('Saluy1');
$obj->enqueue('Saluy2');
$obj->enqueue('Saluy3');
$obj->dequeue();
$obj->dequeue();
var_dump($obj->isEmpty());
echo '<pre>';
print_r($obj);
$obj->enqueue('Saluy4');
$obj->enqueue('Saluy5');
$obj->enqueue('Saluy6');
$obj->enqueue('Saluy7');