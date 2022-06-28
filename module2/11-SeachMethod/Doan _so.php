<?php
session_start();
<<<<<<< HEAD
if (isset($_SESSION['left'])) { // neu bien left dã tông tại thì
    $arr = $_SESSION['arr']; //gán mảng vào biến cục bộ session
    $left = $_SESSION['left']; //gán biến left vào biến cục bộ session
    $right = $_SESSION['right']; ////gán biến right vào biến cục bộ session
    $mid = $_SESSION['mid']; //gán biến mid vào biến cục bộ session

    //gán lại biến session vào các biến
    $_SESSION['arr'] = $arr;
    $_SESSION['left'] = $left;
    $_SESSION['right'] = $right;
    $_SESSION['mid'] = $mid;
    $show = true;
} else {
    $arr = [];
    for ($i = 1; $i <= 100; $i++) {
        $arr[] = $i;
    }
    $left = 0;
    $right = count($arr) - 1;
    $mid = ($left + $right) / 2;
    $_SESSION['arr'] = $arr;
    $_SESSION['left'] = $left;
    $_SESSION['right'] = $right;
    $_SESSION['mid'] = $mid;
    $show = false;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = rand(1, 100);
    if (isset($_REQUEST['doan'])) {
        echo "Máy đoán 
        số : " . $number;
    }

    if (isset($_REQUEST['big'])) {
        $left = $_SESSION['left'];
        $right = $_SESSION['mid'] - 1;
        $mid = (int)(($left + $right) / 2);
        $_SESSION['left'] = $left; // gasn biến left vao bien cuc bộ tạm thời de dùng tiếp
        $_SESSION['right'] = $right; // gasn biến  right vao bien cuc bộ tạm thời de dùng tiếp
        $_SESSION['mid'] = $mid; // gasn biến  right vao bien cuc bộ tạm thời de dùng tiếp
        echo "Máy đoán số : " . $arr[$mid];
    }
    if (isset($_REQUEST['small'])) {
        $left = $_SESSION['mid'] + 1;
        $right = $_SESSION['right'];
        $mid = ceil(($left + $right) / 2);
        $_SESSION['left'] = $left; // gasn biến left vao bien cuc bộ tạm thời de dùng tiếp
        $_SESSION['right'] = $right; // gasn biến  right vao bien cuc bộ tạm thời de dùng tiếp
        $_SESSION['mid'] = $mid; // gasn biến  right vao bien cuc bộ tạm thời de dùng tiếp
        echo "Máy đoán số : " . $arr[$mid];
    }
    if (isset($_REQUEST['dung'])) {
        echo "<script type='text/javascript'>alert('Congulation!!!');</script>";
        session_destroy();
        $page = $_SERVER['PHP_SELF'];
        $sec = "5";
        $show = false;
    }
=======
if(isset($_SESSION['left'])){// neu bien left dã tông tại thì
    $arr=$_SESSION['arr']; //gán mảng vào biến cục bộ session
    $left=$_SESSION['left'];//gán biến left vào biến cục bộ session
    $right=$_SESSION['right'];////gán biến right vào biến cục bộ session
    $mid=$_SESSION['mid'];//gán biến mid vào biến cục bộ session
    
    //gán lại biến session vào các biến
    $_SESSION['arr']=$arr;
    $_SESSION['left']=$left;
    $_SESSION['right']=$right;
    $_SESSION['mid']=$mid;
    $show=true;
} else {
    $arr=[];
    for($i=1;$i<=100;$i++){
        $arr[]=$i;
    }
    $left=0;
    $right=count($arr)-1;
    $left=0;
    $mid=($left+$right)/2;
    $_SESSION['arr']=$arr;
    $_SESSION['left']=$left;
    $_SESSION['right']=$right;
    $_SESSION['mid']=$mid;
    $show=false;

}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = mt_rand(1,100);
    if(isset($_REQUEST['doan'])){
        echo "Máy đoán 
        số : ".$number;
    }
    if(isset($_REQUEST['dung'])){
    echo "Congulation!!!";
    $show=false;
    session_destroy();
    }

    if(isset($_REQUEST['small'])){
        $left=$_SESSION['mid']+1;
        $right=$_SESSION['right'];
        $mid=ceil($mid=($left+$right)/2);
    $_SESSION['left']=$left;// gasn biến left vao bien cuc bộ tạm thời de dùng tiếp
    $_SESSION['right']=$right;// gasn biến  right vao bien cuc bộ tạm thời de dùng tiếp
    echo "Máy đoán số : ".$arr[$mid];

    }
    if(isset($_REQUEST['big'])){
        $left=$_SESSION['left'];
        $right=$_SESSION['mid']-1;
        $mid=ceil($mid=($left+$right)/2);
    $_SESSION['left']=$left;
    $_SESSION['right']=$right;
    echo "Máy đoán số : ".$arr[$mid];
    }

>>>>>>> b6a73c35e935ae9fdc29ee7547ed480b20abd7f6
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
    <form action="" method="POST">
<<<<<<< HEAD
        <?php if ($show) : ?>
        <input type="number" value="" name="number">
        <input type="submit" name="dung" value="Đúng">
        <input type="submit" name="small" value="Nhỏ hơn số của tôi">
        <input type="submit" name="big" value="Lớn hơn số của tôi">
        <?php else : ?>
        <input type="submit" name="doan" value="Đoán">
        <?php endif; ?>
=======
        <?php if($show): ?>
    <input type="number" value="" name="number">
    <input type="submit" name="dung" value="Đúng">
    <input type="submit" name="small" value="Nhỏ hơn số của tôi">
    <input type="submit" name="big" value="Lớn hơn số của tôi">
    <?php else: ?>
    <input type="submit" name="doan"  value="Đoán">
    <?php endif; ?>
>>>>>>> b6a73c35e935ae9fdc29ee7547ed480b20abd7f6
    </form>
</body>

</html>