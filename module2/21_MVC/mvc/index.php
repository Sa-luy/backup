<?php
/*
    Book
    Category
    Student


    index.php?controller=Book&action=index  => BookController::index
    index.php?controller=Book&action=create => BookController::create
    index.php?controller=Book&action=show   => BookController::show

    index.php?controller=Category&action=index => Category::index
    index.php?controller=Category&action=create => Category::create
    index.php?controller=Category&action=show => Category::show

    index.php?controller=Student&action=index => Student::index
    index.php?controller=Student&action=create => Student::create
    index.php?controller=Student&action=show => Student::show
*/

$controller = $_REQUEST['controller'];
$action     = $_REQUEST['action'];

switch ($controller) {
    case 'Book':
        include_once 'controllers/BookController.php';
        $objController = new BookController();
        break;
    case 'Category':
        include_once 'controllers/CategoryController.php';
        $objController = new CategoryController();
        break;
    case 'Student':
        include_once 'controllers/StudentController.php';
        $objController = new StudentController();
        break;
    default:
        # code...
        break;
}


switch ($action) {
    case 'index':
        $objController->index();
        break;
    case 'create':
        $objController->create();
        break;
    case 'show':
        $objController->show();
        break;
    case 'edit':
        $objController->edit();
        break;
    case 'delete':
        $objController->delete();
        break;
    default:
        # code...
        break;
}