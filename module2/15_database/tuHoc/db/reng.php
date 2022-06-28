<?php
require 'db/conect.php';
// echo  'file xu li:::';
if(isset($_POST['submit'])){
    echo 'da submid';
    echo '<pre>';
    print_r($_POST);
    $name=$_POST['name'];
    $use_name=$_POST['use_name'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    if(!empty($name)&&!empty($use_name)&&!empty($password)&&!empty($email)&&!empty($gender)&&!empty($address)){
        // chen du lieu
        $sql="INSERT INTO `users` (`name`,`use_name`,`passsword`,`email`,`gender`,
        `address`) VALUES ('$name','$use_name',md5 ('$password'),'$email','$gender',' $address' )";
        
        
        if($conn->query($sql)===true){
            echo "luu thanh cong";
        }else{
            echo "Loi{$sql}".$conn->error;
        }
    }else{
        echo 'thoong tin nhap vao thieu';
    }
}

?>
<hr>
<a href="index.php">Back</a>