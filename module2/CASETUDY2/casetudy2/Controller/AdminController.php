<?php
// include 'Model/AdminModel.php';
// include 'AdminController.php';
// include 'PopulationsController.php';
class  AdminController
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            if ($email == 'Saluy@gmail.com' && $pass == '123456') {
                header('Location: index.php?controller=population&action=index');
                // include './View/admin/populations.php';
            }
        }

        include 'View/admin/form.php';
    }
}