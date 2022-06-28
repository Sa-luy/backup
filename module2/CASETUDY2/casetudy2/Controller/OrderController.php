<?php
include 'Model/orderModell.php';

class OrderController
{
    function orderbyname()
    {
        $object = new  orderModell;
        $obj = $object->orderbyname();
        include './View/admin/populations.php';
    }
    function orderbyday()
    {
        $object = new  orderModell;
        $obj = $object->orderbyday();
        include './View/admin/populations.php';
    }
    function orderbygender()
    {
        $object = new  orderModell;
        $obj = $object->orderbygender();
        include './View/admin/populations.php';
    }   function singin()
    {
        $object = new  orderModell;
        $obj = $object->orderbygender();
        include './View/admin/populations.php';
    }
}