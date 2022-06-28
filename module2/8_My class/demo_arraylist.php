<?php

class ArarrayList
{
    private array $container = [];
    public int  $limit;
    function __construct($limit, $container)
    {
        $this->container = $container;
        $this->limit = $limit;
    }

    public function add($item)
    {
        if (!($this->isFull())) {
            array_push($this->container, $item);
        } else {
            echo 'Giớ hạn danh sách';
        }
    }

    public function size()
    {
        return count($this->container);
    }
    public function removeByIndex($index)
    {
        if (array_key_exists($index, $this->container)) {
            unset($this->container[$index]);
        } else {
            echo " no data by :" . $index;
        }
    }
    public function update($index, $item)
    {
        if (array_key_exists($index, $this->container)) {
            $this->container[$index] = $item;
        } else {
            echo " no data by :" . $index;
        }
    }
    public function isFull()
    {
        return $this->size() == $this->limit;
    }
    public function getByIndex($index)
    {
        if (array_key_exists($index, $this->container)) {
            return   $this->container[$index];
        } else {
            echo " no data by :" . $index;
        }
    }
    public function contains($item)
    {
        foreach ($this->container as $key => $value) {
            if ($value == $item) {
                return $key;
            } else {
                echo 'khoong tim thay;';
            }
        }
    }
    public function toArray()
    {
        return $this->container;
    }
    public function isEmpty()
    {
        if ($this->size == 0) {
            return true;
        } else {
            return false;
        }
    }
    public function addAtPass($item, $index)
    {
        if ($index < $this->size()) {
            array_splice($this->container, $index, 0, [$item]);
        }
    }
}