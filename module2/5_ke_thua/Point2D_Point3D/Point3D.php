<?php
class Point3D extends Point2D
{
    public  float $z;
    function __construct($x,  $y, float $z)
    {
        parent::__construct($x,  $y);
        $this->z = $z;
    }
    function set_z($z)
    {
        $this->z = $z;
    }
    function set_ZYX(float $y, float $x, float $z)
    {
        parent::set_y($y);
        parent::set_x($x);
        $this->z = $z;
    }
    function get_xyz(): array
    {
        $array = [];
        $array[] = $this->x;
        $array[] = $this->y;
        $array[] = $this->z;
        return $array;
    }
}
