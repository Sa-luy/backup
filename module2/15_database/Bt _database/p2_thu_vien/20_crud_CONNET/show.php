<?php
include 'db.php';
// echo '<pre>';
// print_r( $_REQUEST );
// die();

$id = $_REQUEST['id'];

//cau truy van
$sql = "SELECT * FROM `student_number` WHERE student_number = $id";

//truyen cau truy van vao
$stmt = $conn->query($sql);

//Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ);

//fetchALL se tra ve du lieu nhieu hon 1 ket qua
$row = $stmt->fetch();

?>

<table border="1">
    <tr>
        <td> MAHANG </td>
        <td> <?php echo $row->MAHANG; ?> </td>
    </tr>
    <tr>
        <td> TENHANG </td>
        <td> <?php echo $row->TENHANG; ?> </td>
    </tr>
    <tr>
        <td> MACONGTY </td>
        <td> <?php echo $row->MACONGTY; ?> </td>
    </tr>
</table>