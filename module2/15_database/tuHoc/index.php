<?php
include '../tuHoc/db/conect.php';
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
#input {
    width: 300px;
    margin-left: 20px;
    border-radius: 5px;
    height: 20px;
}

#fieldset {
    width: 350px;
    height: 800px;
    border-radius: 10px;
    margin-left: 300px;
    background-color: azure;
}
</style>

<body>
    <fieldset id="fieldset">
        <form action="/db/reng.php" method="post">
            <CAption>
                <h2>
                    <center>ĐĂNG KÍ TÀI KHOẢN</center>
                </h2>
            </CAption><br> <br>
            <b> Ho và tên</b> <br><br>
            <input id="input" type="text" name="name"> <br><br>
            <b>Tên đăng nhập</b> <br><br>
            <input id="input" type="text" name="use_name"> <br><br>
            <b> Mật Khẩu </b><br><br>
            <input id="input" type="password" name="password"> <br><br>
            <b>Email</b> <br><br>
            <input id="input" type="email" name="email"> <br><br>
            <b>Giới Tính</b> <br><input type="radio" name="gender" value="male">Nam
            <input type="radio" name="gender" value="female">Nữ


            <div> <br>
                <b>Địa chỉ </b> <br>
                <input id="input" type="text" name="address"> <br> <br>

                <input id="input" name="submit" type="submit" style="background-color: rgb(15, 200, 233);"
                    value="Đăng kí">
            </div>
        </form>
    </fieldset>
</body>

</html>