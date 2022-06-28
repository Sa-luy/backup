<?php
$username = 'root';
$password = '';
$conn = new PDO('mysql:host=localhost;dbname=bt_dtbase', $username, $password);
$id = $_REQUEST['id'];
$sql = "SELECT * FROM `tacgia` WHERE ma_tac_gia = $id"; //cau truy van sql
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
            <td> <?php echo $row->ma_tac_gia; ?> </td>
        </tr>
        <tr>
            <td> Ten Tac Gia </td>
            <td> <?php echo $row->tac_gia; ?> </td>
        </tr>
        <tr>
            <td> Ten Sach </td>
            <td> <?php echo $row->book_name; ?> </td>
        </tr>


    </table>
</body>

</html>