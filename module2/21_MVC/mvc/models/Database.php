<?php
$username = 'root';
$password = '';
global $conn;
$conn = new PDO('mysql:host=localhost;dbname=bt_dtbase', $username, $password);