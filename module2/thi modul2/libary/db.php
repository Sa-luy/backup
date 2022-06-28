<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  global $conn;
  $conn = new PDO("mysql:host=$servername;dbname=libary", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Ket Noi Thanh Cong";
} catch (PDOException $e) {

  echo "Ket Noi that bai: " . $e->getMessage();
}