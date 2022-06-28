<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> -->
<?php include './Layout/header.php' ?>
<style>
table {
    background-color: gray;
}

th {
    color: greenyellow;
}

input {
    border-radius: 20px;
}
</style>

<body>
    <form action="" method="post">
        <table class="table">

            <tr>
                <th>Họ</th>
                <td><input type="text" name="fistname"></td>
            </tr>
            <tr>
                <th>Tên</th>
                <td><input type="text" name="lastname"></td>
            </tr>
            <tr>
                <th>Ngày Sinh</th>
                <td><input type="date" name="day_of_birth">
                    <ate /td>
            </tr>
            <!-- <tr>
                <th>Số Hộ Khẩu</th>
                <td><input type="text" name="id_registration"></td>
            </tr> -->
            <tr>
                <th>Số Căn cước</th>
                <td><input type="text" name="cccd"></td>
            </tr>
            <tr>
                <th>Địa chỉ</th>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <th>Liên hệ</th>
                <td><input type="text" name="phone"></td>
            </tr>
            <tr>
                <th>Giới Tính</th>
                <td><select name="gender" id="">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select></td>
            </tr>
            <tr>
                <td><button type="submit" style=" border-radius: 10px; background-color: green;">Thêm</button></td>
            </tr>


        </table>
    </form>
    <a href="index.php?controller=population&action=indexlimit">Quay Lai</a>

</body>
<?php include './Layout/footer.php' ?>


</html>