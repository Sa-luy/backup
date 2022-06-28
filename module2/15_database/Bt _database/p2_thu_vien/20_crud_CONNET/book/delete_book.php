<?php
$username = 'root';
$password = '';
$conn = new PDO('mysql:host=localhost;dbname=bt_dtbase', $username, $password);
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM books WHERE book_id = $id";
    $conn->exec($sql);
    header('location: bookManager.php');
}