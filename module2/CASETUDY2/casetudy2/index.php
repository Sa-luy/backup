<?php
session_start();
if (isset($_REQUEST['controller'])) {
    $controller = $_REQUEST['controller'];
    $action = $_REQUEST['action'];
}
// var_dump($controller);
// die();
switch ($controller) {
    case 'population':
        include './Controller/PopulationsController.php';
        $obj = new PopulationController();
        break;
    case 'order':
        include './Controller/orderController.php';
        $obj = new OrderController();
        break;
    case 'login':
        include './Controller/AdminController.php';
        $obj = new AdminController();
        break;

    default:
        # code...
        break;
}
switch ($action) {
    case 'index':
        $obj->index();
        break;
    case 'indexlimit':
        $obj->indexlimit();
        break;
    case 'show':
        $obj->show();
        break;
    case 'add':
        $obj->create();
        break;
    case 'delete':
        $obj->delete();
        break;
    case 'edit':
        $obj->edit();
        break;
    case 'search':
        $obj->search();
        break;
    case 'orderbyname':
        $obj->orderbyname();
        break;
    case 'orderbyday':
        $obj->orderbyday();
        break;
    case 'orderbygender':
        $obj->orderbygender();
        break;
    case 'loginadmin':
    case 'login':
        $obj->login();
        break;

    default:
        header('location: index.php?controller=population&action=indexlimit');

        break;
}