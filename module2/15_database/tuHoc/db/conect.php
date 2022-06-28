<?php
$servername = "localhost";
// $username = "username";
// $password = "password";

try {
  $conn = new PDO("mysql:host=$servername;dbname=bt_dtbase",);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch (PDOException $e) {
  echo "Ket noi loi: " . $e->getMessage();
}