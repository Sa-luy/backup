<?php
$username = 'root';
$password = '';
$conn = new PDO('mysql:host=localhost;dbname=bt_dtbase', $username, $password);
$id = $_REQUEST['id'];
$sql = "SELECT * FROM `students` WHERE student_number = $id";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$row = $stmt->fetch();

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
            <td> <?php echo $row->student_number; ?> </td>
        </tr>
        <tr>
            <td> Ma Loai Sach </td>
            <td> <?php echo $row->student_name; ?> </td>
        </tr>
        <tr>
            <td> Ten Sach </td>
            <td> <?php echo $row->address; ?> </td>
        </tr>
        <tr>
            <td> Nha Xuat Ban </td>
            <td> <?php echo $row->email; ?> </td>
        </tr>
        <tr>
            <td> Tac Gia</td>
            <td><img src="<?php echo $row->image; ?> " alt="" width="100" height="100"> </td>
        </tr>

    </table>
</body>

</html>