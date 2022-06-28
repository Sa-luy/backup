<?php
session_start();
if (isset($_SESSION['arr'])) {
    $arrays = $_SESSION['arr'];
} else {
    $arrays = [];
    for ($i = 1; $i <= 100; $i++) {
        $arrays[] = $i;
    }
    shuffle($arrays);
    $_SESSION['arr'] = $arrays;
}



$error = null;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $number = $_REQUEST['number'];

    if ($number <= 100 && $number >= 1) {
        echo "Ket qua" . $arrays[$number - 1];
    } else {
        // shuffle($arrays);
        $error = 'Vui lòng nhập $ô hop lệ';
        echo $error;
    }
}


$number = null;
$error = null;

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
fieldset {
    width: 800px;
}
</style>

<body>

    <fieldset>

        <?php foreach ($arrays as  $key => $value) {
            echo $value . '  ,,  ';
        }

        ?> <br> <br>

    </fieldset><br><br>
    <div>
        <form action="" method="POST">

            Tìm Số thứ: <input type="number" name="number" placeholder="nhập"><br>
            <input type="submit" value="Tim">
            <input type="reset" value="Nhap Lai"><br>
        </form>

    </div>
</body>

</html>