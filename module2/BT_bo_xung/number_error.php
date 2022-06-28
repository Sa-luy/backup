<?php
$number1err = null;
$number2err = null;
$caculatoreerr = null;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number1 = $_REQUEST['number1'];
    $number2 = $_REQUEST['number2'];
    $caculator = $_REQUEST['caculator'];

    if (empty($number1)) {
        $number1err = 'yeu cầu nhập sô';
    }
    if (empty($number2)) {
        $number2err = 'yeu cầu nhập sô';
    }
    switch ($caculator) {
        case null:
            $caculatoreerr = ' vui long nhap phep toan';
            break;
        case 'cong':
            echo $number1 + $number2;
            break;
        case 'tru':
            echo $number1 - $number2;
            break;
        case 'nhan':
            echo $number1 * $number2;
            break;
        case 'chia':
            echo $number1 / $number2;
            break;
    }
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
</style>

<body>
    <div>
        <table>
            <form action="" method="POST">
                <tr>
                    <td>Sô 1 : <input type="number" name="number1"><br></td>
                    <td id="error">*<?= $number1err; ?></td>
                </tr>
                <td> <select name="caculator" id="">
                        <option value="">Chọn</option>
                        <option value="cong">Cộng</option>
                        <option value="tru">trừ</option>
                        <option value="nhan">nhân</option>
                        <option value="chia">Chia</option>
                    </select><br>
                </td>
                <td id="error">*<?= $caculatoreerr ?></td>

                <tr>
                    <td>Sô 2 : <input type="number" name="number2"><br></td>
                    <td id="error">*<?php echo $number2err ?></td>
                </tr>

                <tr>
                    <td><input type="submit"></td>
                </tr>
            </form>
        </table>
    </div>

</body>

</html>