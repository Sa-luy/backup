<?php
echo'<pre>';
print_r('phuong thuwc gui du lieu:'.$_SERVER['REQUEST_METHOD']);
echo'<pre>';
print_r($_REQUEST);
// 

//Kiem tra xem nguoi dug da du lieu ddi
if($_SERVER['REQUEST_METHOD']=='POST'){
$usename=$_REQUEST['name'];
$pass=$_REQUEST['pass'];
echo '<br>Tên đăng nhập la:'.$usename;
echo '<br>Mật khẩu la:'.$pass;

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
<body>
    
    <form action="" method="post">
        Ten <input type="username" name="name" id=""> <br>
        Mật Khẩu <input type="password" name="pass" id=""> <br>
        <input type="submit" value="Đăng nhập" >
    </form>
</body>
</html>