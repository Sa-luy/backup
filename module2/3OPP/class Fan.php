<?php
class Fan
{
    public const SLOW = 1;
    public const MEDIUM = 2;
    public const FAST = 3;
    public int $speed = 1;
    public bool $on = false;
    private float $radius = 5;
    private  string $color = "blue";
    public function __construct()
    {
    }
    public function getter_SLOW()
    {
        return  $this->SLOW;
    }
    public function getter_MEDIUM()
    {
        return  $this->MEDIUM;
    }
    public function getter_FAST()
    {
        return  $this->FAST;
    }
    public function getter_speed()
    {
        return  $this->speed;
    }
    public function isgetter_on()
    {
        return  $this->on;
    }
    public function getter_radius()
    {
        return  $this->radius;
    }
    public function getter_color()
    {
        return  $this->color;
    }

    public function setter_SLOW($SLOW)
    {
        return  $this->SLOW = $SLOW;
    }
    public function setter_MEDIUM($MEDIUM)
    {
        return  $this->MEDIUM = $MEDIUM;
    }
    public function setter_FAST($FAST)
    {
        return  $this->FAST = $FAST;
    }
    public function setter_speed($speed)
    {
        return  $this->speed = $speed;
    }
    public function setter_on($on)
    {
        return  $this->on = $on;
    }
    public function setter_radius($radius)
    {
        return  $this->radius = $radius;
    }
    public function setter_color($color)
    {
        return  $this->color = $color;
    }
    public function  toString()
    {
        if ($this->on == true) {
            return "fan is on " . $this->speed . ' ' . $this->radius . ' ' . $this->color;
        } else {
            return "fan is off " . $this->radius . ' ' . $this->color;
        }
    }
}
$Fan1 = new Fan;
$fast =
    $Fan1->setter_radius(10);
$Fan1->setter_speed(Fan::FAST);
$Fan1->setter_color('yellow');
$Fan1->setter_on(true);
echo $Fan1->toString() . '<br>';
$Fan2 = new Fan;
$Fan2->setter_speed(Fan::MEDIUM);
$Fan2->setter_radius(5);
$Fan2->setter_color('blue');
$Fan2->setter_on(false);
echo $Fan2->toString();