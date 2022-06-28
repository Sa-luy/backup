

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="POST" style="border: 1px;">
    <h1><strong>Login</strong></h1>
    Username: <br>
    <input type="text" name="usename" id="name"> <br>
    Password: <br>
    <input type="password" name="pass" id="pass"> <br>
    <input type="submit" value="Singin">
    <div></div>
    <?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $usename=$_REQUEST['usename'];
    $pass=$_REQUEST['pass'];

    
    }
    $admin='admin';
    $paswword='admin';
    if($usename==$admin&&$pass==$paswword){
        echo '<div>Welcome admin to website.</div>';
    }else{
        echo'<div> Login Error.</div>';
    }



?>

</form>
</body>
</html>