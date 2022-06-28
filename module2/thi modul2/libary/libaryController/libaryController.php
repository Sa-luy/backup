<?php
include './libaryController.php';
class libariControler
{
    function getAll(){
        
        $obj=New LibariModel;
        $obj->getAll();
        include '../View/listbook.php';

        
    }
//     function getAll(){}
//     function getAll(){}
//     function getAll(){}
//     function getAll(){}
//     function getAll(){}
// }