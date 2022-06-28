<?php
class Shape{
    public string $name;
    function __construct($name)
    {
        $this->name=$name;
    }
    function show(){
        return 'Hello !.my name is'.$this->name;
        
    }
}