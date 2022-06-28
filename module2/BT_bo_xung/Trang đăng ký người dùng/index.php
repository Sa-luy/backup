<?php

$errorname = null;
$errorphone = null;
$erroremail = null;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $error = false;
    if (empty($name)) {
        $errorname = "Bạn phải tên!Trường bắt buộc.";
        $error = true;
    }
    if (empty($email)) {
        $erroremail = "Bạn phải email!TRường bắt buộc.";
        $error = true;
    }
    if (empty($phone)) {
        $errorphone  = "Bạn phải số điện thoại!TRường bắt buộc.";
        $error = true;
    }
    if (!$error) {
        saveData('data.json', $name, $email, $phone);
    }
}
//chuyen filesang chuỗi json và giải mã
function loadData($filename)
{
    $jsondata = file_get_contents($filename);
    return json_decode($jsondata, true);
}
//ham luu du lieu vao mảng
function saveData($filename, $name, $email, $phone)
{
    $contacts = [
        'name' => $name,
        'email' => $email,
        'phone' => $phone
    ];
    $jsondata = file_get_contents($filename); //chuyen tep thanh chuoi json
    $arrData = json_decode($jsondata, true); //jai ma thanh mang

    array_push($arrData, $contacts); // đay du lieu mpoi vao mang

    // print_r($arrData);
    // Chuyển đổi mảng đã cập nhật thành JSON
    $jsondata = json_encode($arrData, JSON_PRETTY_PRINT);
    //var_dump($jsondata);
    //ghi du lieu vao file json
    file_put_contents($filename, $jsondata);
    echo "Lưu trữ thành công";
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
<style>
#error {
    color: red;
}

#submit {
    background-color: goldenrod;
    border-radius: 5px;
}
</style>

<body>
    <div>
        <fieldset>
            <legend>Đăng kí người dùng</legend>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td>Tên Người Dùng :</td>
                        <td><input type="text" name="name"></td>
                        <td id="error">*<?php echo $errorname; ?></td>

                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td> <input type="text" name="email"></td>
                        <td id="error">*<?php echo $erroremail; ?></td>
                    </tr>
                    <tr>
                        <td>Số điện thoại:</td>
                        <td> <input type="number" name="phone"><br></td>
                        <td id="error">*<?php echo $errorphone; ?></td>

                    </tr>
                    <tr>
                        <td><input type="submit" value=" Nhập" id="submit"></td>
                    </tr>
                </table>
            </form>
            <?php
$listRegistrations = loadData('data.json');


            ?>
        </fieldset>
    </div>
    <table border="1">
        <caption>Danh Sach dang ki</caption>
        <tr>

            <th>Họ va Tên</th>
            <th>email</th>
            <th>Số Điện thoại</th>
        </tr>
        <?php foreach ($listRegistrations as $listRegistration)
        ?>
        <tr>
            <td><?php echo $listRegistration['name'] ?></td>
            <td><?php echo $listRegistration['email'] ?></td>
            <td><?php echo $listRegistration['phone'] ?></td>

        </tr>
    </table>

</body>

</html>