<?php

// namespace Controller;
include_once './Models/DBConnection.php';

class CustomerController
{
    function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include './views/add.php';
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Validate dữ liệu
            $errors = [];
            $fields = ['name', 'email', 'address'];

            foreach ($fields as $field) {
                if (empty($_POST[$field])) {
                    $errors[$field] = 'Không được để trống';
                }
            }
            if (empty($errors)) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $data = new customerDB();
                $data->name= $name;
                $data->email= $email;
                $data->address= $address;
                $data = $data->create($data);
                
                header('Location:./index.php');
            }
        }
    }
    function create()
    {
    }
}