<?php
//ket noi CSDL
include 'db.php';

//lay du lieu tren url
$id = 101;

//lay du lieu
$TENHANG    = 'Khóa học Bootcamp';

//cau query
$sql = "UPDATE MATHANG set TENHANG='$TENHANG' where MAHANG=$id";

//check sql
//var_dump($sql);

//thuc hien truy van
$conn->exec($sql);