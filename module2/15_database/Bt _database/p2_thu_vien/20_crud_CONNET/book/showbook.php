<?php
$username = 'root';
$password = '';
$conn = new PDO('mysql:host=localhost;dbname=bt_dtbase', $username, $password);
$id = $_REQUEST['id'];
$sql = "SELECT * FROM `books` WHERE book_id = $id"; //cau truy van sql
$stmt = $conn->query($sql); //truyen cau truy van vao
$stmt->setFetchMode(PDO::FETCH_OBJ); //Thiết lập kiểu dữ liệu trả về
$row = $stmt->fetch(); //fetchALL se tra ve du lieu nhieu hon 1 ket qua

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
</style>

<body>


    <table border="1">
        <tr>
            <td> STT </td>
            <td> <?php echo $row->book_id; ?> </td>
        </tr>
        <tr>
            <td> Ma Loai Sach </td>
            <td> <?php echo $row->ma_loai_sach; ?> </td>
        </tr>
        <tr>
            <td> Ten Sach </td>
            <td> <?php echo $row->book_name; ?> </td>
        </tr>
        <tr>
            <td> Nha Xuat Ban </td>
            <td> <?php echo $row->nha_xuat_ban; ?> </td>
        </tr>
        <tr>
            <td> Tac Gia</td>
            <td> <?php echo $row->tac_gia; ?> </td>
        </tr>
        <tr>
            <td> Ma Tac Gia </td>
            <td> <?php echo $row->ma_tac_gia; ?> </td>
        </tr>
        <tr>
            <td> Nam Xuat Ban</td>
            <td> <?php echo $row->nam_xuat_ban; ?> </td>
        </tr>
        <tr>
            <td> Gia </td>
            <td> <?php echo $row->gia; ?> </td>
        </tr>
        <tr>
            <td> Image</td>
            <td> <?php echo $row->image; ?> </td>
        </tr>
    </table>
</body>

</html>