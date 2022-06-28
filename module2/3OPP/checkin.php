<?php
class Battery
{
    public  int $energy;
    public function __construct()
    {
    }
    public function Setenergy($energy)
    {
        $this->energy = $energy;
    }
    public function Getenergy()
    {
        return $this->energy;
    }
    public function decreaseEnergy()
    {
        $this->energy--;
    }
}

$Battery1 = new Battery;
$Battery1->Setenergy(50);
echo $Battery1->Getenergy();