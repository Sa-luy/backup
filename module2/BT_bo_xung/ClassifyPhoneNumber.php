<?php

$headViettell = [32, 33, 34, 35, 36, 37, 38, 39, 97, 98];
$headMobil = [70, 79, 77, 76, 78, 93];
$headVina = [81, 82, 83, 84, 85, 91, 94];
$headVietnammobile = [56, 58];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $viettel = [];
    $vinaPhone = [];
    $mobiphone = [];
    $vietnammobile = [];
    $arrerror = [];
    $listphones = $_REQUEST['listphone'];
    $arrayPhones = explode(' ', $listphones);
    foreach ($arrayPhones as  $phone) {
        if (strlen($phone) == 10) {
            $headPhone = substr($phone, 0, 3);
            foreach ($headViettell as $value) {
                if ($value == $headPhone) {
                    $viettel[] = $phone;
                }
            }
            foreach ($headMobil as $value) {
                if ($value == $headPhone) {
                    $mobiphone[] = $phone;
                }
            }
            foreach ($headVina as $value) {
                if ($value == $headPhone) {
                    $vinaPhone[] = $phone;
                }
            }
            foreach ($headVietnammobile as $value) {
                if ($value == $headPhone) {
                    $vietnammobile[] = $phone;
                }
            }
        } else {
            $arrerror[] = $phone;
        }
    }
    if (!empty($viettel)) {
        echo "Vietttell : ";
        foreach ($viettel as $value) {
            echo $value . '-';
            echo "<hr>";
        }
    }
    if (!empty($vinaPhone)) {
        echo "Vina: ";
        foreach ($vinaPhone as $value) {
            echo $value . '-';
            echo "<hr>";
        }
    }
    if (!empty($mobiphone)) {
        echo "Mobile : ";
        foreach ($mobiphone as $value) {
            echo $value . '-';
            echo "<hr>";
        }
    }
    if (!empty($vietnammobile)) {
        echo "Vietnammobile : ";
        foreach ($vietnammobile as $value) {
            echo $value . '-';
            echo "<hr>";
        }
    }
    if (!empty($arrerror)) {
        foreach ($arrerror as $value) {
            echo "$value error!!!";
        }
    }
    // var_dump($viettel);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Number</title>
</head>

<body>
    <form action="" method="POST">
        <textarea name="listphone" id="" cols="20" rows="10"
            placeholder="mỗi số cách nhau bởi 1  khoang trắng"><?php if (!empty($listphones)) echo $listphones ?></textarea>
        <input type="submit" value="Phân Loại">
    </form>
</body>

</html>