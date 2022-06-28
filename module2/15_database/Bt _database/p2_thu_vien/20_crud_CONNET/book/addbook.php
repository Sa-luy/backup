<?php
include_once('../connect.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
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

        <table>
            <th>
                <h3>Them Sach</h3>
            </th>
            <tr>
                <td> Tên Sach:</td>
                <td> <input type="text" name="name" placeholder="nhap ten sach">
                </td>
            <tr>
                <td> Ma sach:</td>
                <td> <input type="text" name="masach" placeholder="nhap ma loai sach">
                </td>
            </tr>
            <tr>
                <td> Nha xuat ban:</td>
                <td> <input type="text" name="nxb" placeholder="nhap nam xuat ban">
                </td>
            </tr>
            <tr>
                <td> Tac gia:</td>
                <td> <input type="text" name="tacgia" placeholder="nhap ten tac gia">
                </td>
            </tr>
            <tr>
                <td> Ma Tac gia:</td>
                <td> <input type="text" name="mtacgia" placeholder="nhap ma tac gia">
                </td>
            </tr>
            <tr>
                <td> Nam xuat ban</td>
                <td> <input type="text" name="namxb" placeholder="nhap nam xuat ban">
                </td>
            </tr>
            <tr>
                <td> Gia</td>
                <td> <input type="text" name="gia" placeholder="nhap gia">
                </td>
            </tr>
            <tr>
                <td> Image</td>
                <td> <input type="text" name="img" placeholder="link image">
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="Thêm"></td>
            </tr>
        </table>

    </form>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $conn = new PDO('mysql:host=localhost;dbname=bt_dtbase', $username, $password);
        $name = $_REQUEST['name'];
        $masach = $_REQUEST['masach'];
        $nxb = $_REQUEST['nxb'];
        $tacgia = $_REQUEST['tacgia'];
        $mtacgia = $_REQUEST['mtacgia'];
        $namxb = $_REQUEST['namxb'];
        $gia = $_REQUEST['gia'];
        $img = $_REQUEST['img'];
        var_dump($img);
        $sql = "INSERT INTO books VALUES('' ,$masach, '$name','$nxb','$tacgia','$mtacgia','$namxb','$gia','$img');";
        //  "INSERT INTO books
        //  VALUES(   '','','','','', '',,,'')
        //  WHERE book_id = $id";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        header('location: bookManager.php');
    }
    ?>
</body>

</html>