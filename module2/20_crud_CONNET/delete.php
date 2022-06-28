<?php
//ket noi CSDL
include 'db.php';

//lay du lieu tren url
$id = $_SERVER['id'];

//cau query
$sql = "DELETE FROM MATHANG WHERE MAHANG = $id";

//check sql
var_dump($sql);

//thuc hien truy van
$conn->exec($sql);