<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> -->
<?php include './Layout/header.php' ?>

<body>
    <form action="" method="post">
        <table border="1">

            <tr>
                <th>Họ</th>
                <td><input type="text" name="fistname" value="<?= $obj->fistname ?>"></td>
            </tr>
            <tr>
                <th>Tên</th>
                <td><input type="text" name="lastname" value="<?= $obj->lastname ?>"></td>
            </tr>
            <tr>
                <th>Ngày Sinh</th>
                <td><input type="date" name="day_of_birth" value="<?= $obj->day_of_birth ?>"></td>
            </tr>
            <tr>
                <th>Số Căn cước</th>
                <td><input type="text" name="cccd" value="<?= $obj->cccd ?>"></td>
            </tr>
            <tr>
                <th>Địa chỉ</th>
                <td><input type="text" name="address" value="<?= $obj->address ?>"></td>
            </tr>
            <tr>
                <th>Liên hệ</th>
                <td><input type="text" name="phone" value="<?= $obj->phone ?>"></td>
            </tr>
            <tr>
                <th>Giới Tính</th>
                <td><select name="gender" id="">
                        <option value="">Chọn</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select></td>
            </tr>

            <tr>
                <td><button type="submit">Lưu lại</button></td>
            </tr>


        </table>
    </form>
    <a href="index.php?controller=population&action=indexlimit"></a>

</body>
<?php include './Layout/footer.php' ?>

</html>