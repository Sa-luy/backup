<?php include './connect.php';
$id = $_REQUEST['id'];
$sql = "SELECT * FROM `hang_hoa` 
WHERE ma_hang=$id;";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$rows = $stmt->fetch();



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<form action="" method="POST">
    <table border="1">
        <tr>

            <caption>Chỉnh Sửa Mặt Hàng <?= $rows->ten_hang ?></caption>

        </tr>
        <tr>
            <th>Tên Hàng</th>
            <td><input type="text" value="<?= $rows->ten_hang ?>" name="ten_hang"></td>
        </tr>
        <tr>
            <th>Loại Hàng</th>
            <td><select name="loai_hang" id="">
                    <option value=""><?= $rows->ten_hang ?></option>
                    <option value="dien_thoai">Điện Thoại</option>
                    <option value="dieu_hoa"> Điều Hòa</option>
                    <option value="tu_lanh"> Tủ Lạnh</option>
                </select></td>
        </tr>
        <tr>
            <th>Gía</th>
            <td><input type="text" value="<?= $rows->gia ?>" name="gia"></td>

        </tr>
        <tr>
            <th>Số Lượng</th>
            <td>
                <input type="text" value="<?= $rows->so_luong ?>" name="so_luong">
            </td>
        </tr>
        <tr>
            <th>Mô tả</th>
            <td><textarea name="mo_ta" id="" value="mo_ta" cols="30" rows="10"> <?= $rows->mo_ta ?></textarea></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value=" Them">
                <a href="goodsview.php">Thoát</a>
            </td>
        </tr>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // $id = $_POST['ma_hang'];
            $tenhang = $_POST['ten_hang'];
            $loaihang = $_POST['loai_hang'];
            $gia = $_POST['gia'];
            $soluong = $_POST['so_luong'];
            $mota = $_POST['mo_ta'];
            $sql = "UPDATE `hang_hoa` SET `gia` = '$gia',
         ten_hang='$tenhang',
         loai_hang='$loaihang',
         so_luong='$soluong',
         mo_ta='$mota'
          WHERE `hang_hoa`.`ma_hang` = $id;";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            header('location: goodsview.php');
        }
        ?>
    </table>
</form>

<body>

</body>

</html>