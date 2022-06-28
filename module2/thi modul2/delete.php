<?php
include './connect.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM hang_hoa WHERE ma_hang = $id";
    $conn->exec($sql);
    header('location: goodsview.php');
}