<?php
interface Bird
{
    function fly();
}
interface Fish
{
    function swim();
}
class Vinfast implements Bird, Fish
{
    function fly()
    {
        echo "car fly";
    }
    function swim()
    {
        echo "car swim";
    }
}
$newcar = new Vinfast();
$newcar->swim() . '<br>';
$newcar->fly() . '<br>';

die();
abstract class XeHoiNuoc
{
    abstract function  drink();
}
abstract class Car extends XeHoiNuoc
{
    public abstract function move();
    public abstract function stop();
    public abstract function drink();
}
class Vinfast1 extends Car
{
    function move()
    {
        echo 'my car running';
    }
    function stop()
    {
    }
    function drink()
    {
        echo 'my drink';
    }
}
$newcar = new Vinfast1();
$newcar->move() . '/';
$newcar->stop() . '/';
$newcar->drink() . '/';
$newcar->stop() . '/';
$newcar->drink();