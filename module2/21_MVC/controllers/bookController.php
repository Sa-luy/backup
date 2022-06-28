<?php
include_once '../Models/bookModell.php';
class Bookcontroller
{
    public function index()
    {
        include '../views/books/index.php';
    }
    public function create()
    {
        include '../views/books/delete.php';
    }
    public function edit()
    {
        include '../views/books/create.php';
    }
    public function show()
    {
        include '../views/books/edit.php';
    }
}

$objController = new Bookcontroller;