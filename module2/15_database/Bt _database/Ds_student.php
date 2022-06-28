<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sach  Student</title>
</head>
<style>
tr,
td {
    border: 1px solid gray;
    padding: 10px;
}
</style>

<body>
    <div class="container">
        <table border="1">
            <tr>
                <th>STT</th>
                <th>Name</th>
                <th>Địa chỉ</th>
                <th>Email</th>
                <th>Image</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
            <?php
            $conn = new mySqli('localhost', 'root', '', 'bt_dtbase');
            $sql = "SELECT * FROM students";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo "            <tr>
                <td>" . $row['student_number'] . "</td>
                <td>" . $row['student_name'] . "</td>
                <td>" . $row['address'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>null</td>
                <td> <a href='#'>Sửa</a> </td>
                <td> <a href='#'>Xóa</a> </td>
            </tr>";
            }
            $conn ->close();


            ?>

        </table>
    </div>
</body>

</html>