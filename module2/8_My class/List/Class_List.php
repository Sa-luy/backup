<?php
class ArrayList
{
    public  array $arrayList;
    function __construct($arr = "")
    {
        if (is_array($arr)) {
            $this->arrayList = $arr;
        } else {
            $this->arrayList = [];
        }
    }
    function isInteger($number_check): bool
    {
        return preg_match("/[0-9]+$/", $number_check);
    }
    function size()
    {
        return count($this->arrayList);
    }

    public function add($obj)
    {
        array_push($this->arrayList, $obj);
    }
    function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->arrayList[$index + 1];
        } else {
            die("EERROR IN.ArrayList.get");
        }
    }
}