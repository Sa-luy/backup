<?php
class QuadraticEquation
{
    private int $a;
    private int $b;
    private int $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function gettter_a()
    {
        return   $this->a;
    }
    public function gettter_b()
    {
        return   $this->b;
    }
    public function gettter_c()
    {
        return   $this->c;
    }
    public function getDiscriminant()
    {
        $delta = ($this->b * $this->b) - (4 * $this->a * $this->c);
        return $delta;
    }
    public function getRoot1()
    {
        $delta = ($this->b * $this->b) - (4 * $this->a * $this->c);
        $x1 = ((-$this->b) + sqrt($delta)) / 2 * $this->a;
        return $x1;
    }
    public function getRoot2()
    {
        $delta = ($this->b * $this->b) - (4 * $this->a * $this->c);
        $x2 = ((-$this->b) - sqrt($delta)) / 2 * $this->a;
        return $x2;
    }
}
$canbac2 = new QuadraticEquation(8, 4, 2);
$deta1 = $canbac2->getDiscriminant();
if ($deta1 >= 0) {
    echo 'x1=' . $canbac2->getRoot1() . '<br>';
    echo 'x2=' . $canbac2->getRoot2() . '<br>';
} else if ($deta1 == 0) {
    $x1 = (-$b / (2 * $a));
    echo ("Phương trình có nghiệm kép: x1 = x2 = " . $x1);
} else {
    echo ("Phương trình vô nghiệm!");
}