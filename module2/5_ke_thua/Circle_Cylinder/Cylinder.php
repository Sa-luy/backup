<?php
class Cylinder  extends Circle
{
    public int $height;
    function __construct($radius, $color, $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }
    function toString()
    {
        echo parent::toString() . ' chieu cao : ' . $this->height . '<br>';
    }
    function Volume(): int
    {
        return parent::calculateArea() * $this->height;
    }
}
