<?php
$username = 'root';
$password = '';
$conn = new PDO('mysql:host=localhost;dbname=bt_dtbase', $username, $password);
$id = $_REQUEST['id'];
// echo $id;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <h3>Chỉnh Sửa Tác giả</h3>
        Tên: tac gia
        <p><?php ?></p>
        <input type="text" name="name" placeholder="nhập tên" require>
        <input type="submit" value="Sửa">
    </form>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $conn = new PDO('mysql:host=localhost;dbname=bt_dtbase', $username, $password);
        $id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
        $sql = "UPDATE tacgia SET tac_gia = '$name' WHERE ma_tac_gia = $id";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        // $stmt->setFetchMode(PDO::FETCH_OBJ);
        // $rows = $stmt->fetchAll();
        echo 'Chỉnh Sửa Thành công';
        header('location: libariManager_tacgia.php');
    }
    ?>

</body>

</html>