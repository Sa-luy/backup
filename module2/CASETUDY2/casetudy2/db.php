<?php 
$host= 'localhost';
$db_name='populations';
$username = "root";
$password='';
global $conn;
try {
    $conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Ket noi thanh coong<hr>";
  } catch(PDOException $e) {
    echo "Ket noi that bai: " . $e->getMessage();
  }