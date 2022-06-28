<?php
class Point2D
{
    public float $x;
    public float $y;
    function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    function get_x(): float
    {
        return $this->x;
    }
    function get_y(): float
    {
        return $this->y;
    }
    function get_xy(){
        return $this->x.$this->y;
    }
    function set_x($x)
    {
        $this->x = $x;
    }
    function set_y($y)
    {
        $this->y = $y;
    }
    function toString()
     {
        echo "Toa do x : ".$this->x."Toa do x : ".$this->y;
    }
}
