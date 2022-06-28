<?php
class Rectangle
{
    public int $weight;
    public int $height;
    public function __construct($weight, $height)
    {
        $this->weight = $weight;
        $this->height = $height;
    }
    public function Area(): int
    {
        return $this->weight * $this->height;
    }
    public function Premetter(): int
    {
        return ($this->weight + $this->height) * 2;
    }
}
$Rectangle1 = new Rectangle(3, 5);
echo $Rectangle1->Area() . '<br>';
echo $Rectangle1->Premetter();