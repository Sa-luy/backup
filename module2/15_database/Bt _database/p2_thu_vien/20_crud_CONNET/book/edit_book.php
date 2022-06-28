<?php
$username = 'root';
$password = '';
$conn = new PDO('mysql:host=localhost;dbname=bt_dtbase', $username, $password);
$id = $_REQUEST['id'];
$sql = "SELECT*FROM books WHERE book_id=$id;";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$rows = $stmt->fetchAll();
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
<style>
tr:nth-child(even) {
    background: #CCC
}

tr:nth-child(odd) {
    background: #FFF
}

caption {
    background-color: blueviolet;
}

table {
    border-radius: 10px;
}

button {
    background-color: greenyellow;
}
</style>

<body>

    <form action="" method="POST">

        <table border="1">
            <caption>
                <h3>Chỉnh Sửa Sach</h3>
            </caption>
            <?php foreach ($rows as $key => $row) :
            ?>
            <tr>
                <td> Tên Sach:</td>
                <td> <input type="text" name="name" value="<?= $row->book_name; ?>">
                </td>
            <tr>
                <td> Ma sach:</td>
                <td> <input type="text" name="masach" value="<?= $row->ma_loai_sach; ?>">
                </td>
            </tr>
            <tr>
                <td> Nha xuat ban:</td>
                <td> <input type="text" name="nxb" value="<?= $row->nha_xuat_ban; ?>">
                </td>
            </tr>
            <tr>
                <td> Tac gia:</td>
                <td> <input type="text" name="tacgia" value="<?= $row->tac_gia; ?>">
                </td>
            </tr>
            <tr>
                <td> Ma Tac gia:</td>
                <td> <input type="text" name="mtacgia" value="<?= $row->ma_tac_gia; ?>">
                </td>
            </tr>
            <tr>
                <td> Nam xuat ban</td>
                <td> <input type="text" name="namxb" value="<?= $row->nam_xuat_ban; ?>">
                </td>
            </tr>
            <tr>
                <td> Gia</td>
                <td> <input type="text" name="gia" value="<?= $row->gia; ?>">
                </td>
            </tr>
            <tr>
                <td> Image</td>
                <td> <input type="text" name="img" value="<?= $row->image; ?>">
                </td>
            </tr>
            <tr>
                <td><button type="submit" value="">Lưu Lại</button></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </form>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $conn = new PDO('mysql:host=localhost;dbname=bt_dtbase', $username, $password);
        $id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
        $masach = $_REQUEST['masach'];
        $nxb = $_REQUEST['nxb'];
        $tacgia = $_REQUEST['tacgia'];
        $mtacgia = $_REQUEST['mtacgia'];
        $namxb = $_REQUEST['namxb'];
        $gia = $_REQUEST['gia'];
        $img = $_REQUEST['img'];
        $sql = "UPDATE books SET book_name = '$name',
        ma_loai_sach= '$masach',nha_xuat_ban= '$nxb',
        tac_gia= '$tacgia',ma_tac_gia= '$mtacgia',
        nam_xuat_ban= '$namxb',
        gia= '$gia',
        image= '$img'
         WHERE book_id = $id";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        // $stmt->setFetchMode(PDO::FETCH_OBJ);
        // $rows = $stmt->fetchAll();
        // echo 'Chỉnh Sửa Thành công';
        header('location: bookManager.php');
    }
    ?>

</body>

</html>