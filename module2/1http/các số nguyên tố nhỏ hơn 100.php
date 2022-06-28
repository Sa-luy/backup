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
        <label for="1"> Hiển thị số nguyến tố từ 1đến</label>
        <input type="text" name="so" id="1">
        <input type="submit" value="Hiển thị" style="background-color: gray;">
    </form>
</body>

</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = $_REQUEST['so'];
    echo "2<br>";

    for ($i = 3; $i <= $number; $i++) {
        $x = 0;
        for ($j = 2; $j < $i; $j++) {
            if ($i % $j == 0) {
                $x++;
            }
        }
        if ($x >= 1) {
            continue;
        }
        echo $i . "<br>";
    }
}