<?php
include './Model/PopulationsModel.php';
// echo 'to controller<hr>';
class PopulationController
{
    function index()
    {
        $object = new PopulationsModell();
        $obj = $object->getAll();
        include './View/admin/populations.php';
    }
    function indexlimit()
    {
        $object = new PopulationsModell();
        $obj = $object->getlimit();
        include './View/admin/populations.php';
    }
    function show()
    {
        $id = $_GET['id'];
        $object = new PopulationsModell();
        $obj = $object->detail($id);
        include './View/admin/show.php';
    }
    function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $object = new PopulationsModell();
            $obj = $object->add($_REQUEST);
            header('location: index.php?controller=population&action=indexlimit');
        }
        include './View/admin/create.php';
    }
    function delete()
    {
        $id = $_GET['id'];
        // echo '<pre>';
        // print_r($id);
        // die();
        $object = new PopulationsModell();
        $object->delete($id);
        header('location: index.php?controller=population&action=indexlimit');
    }
    function edit()
    {
        $id = $_GET['id'];
        $object = new PopulationsModell();
        $obj = $object->detail($id);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $object->edit($id);
            header('location: index.php?controller=population&action=indexlimit');
        }
        include './View/admin/edit.php';
    }
    public function search()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $search = $_POST['name'];
            $object = new PopulationsModell();
            $objs = $object->search($search);
        }
        include_once './View/admin/search.php';
    }
}