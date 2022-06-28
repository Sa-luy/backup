<?php
class ArrayList
{
    public int $size = 10;
    public array $element = [];
    function insert($index, $obj): void
    {
        array_splice($this->element, $index, 0, $obj);
    }
    function add($obj)
    {
        array_push($this->element, $obj);
    }
    function remove($index)
    {
        array_slice($this->element, $index);
    }
    function get($index)
    {
        return $this->element[$index];
    }
    function clear()
    {
        $this->element = [];
        return $this->element;
    }
    function addAll($arr)
    {
        array_merge($this->element, $arr);
    }
    function indexOf($obj): int
    {
        foreach ($this->element as $key => $value) {
            if ($value = $obj) {
                return $key;
            } else {
                echo  $obj . 'is not inside ArrayList';
            }
        }
    }
    function isEmty()
    {
        if (empty($this->element)) {
            return true;
        } else {
            return false;
        }
    }
    function reset(): void
    {
        $this->element = [];
        $this->size = 10;
    }
    function size()
    {
        return count($this->element);
    }
}
$arrayone = new ArrayList;
$arrayone->add('saluy');
$arrayone->add('sa_luy');
$arrayone->add('sal_uy');
$arrayone->add('salu_y');
$arrayone->add('s_aluy');
$arrayone->add('saluy_');
echo $arrayone->size();