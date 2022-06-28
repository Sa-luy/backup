<?php
$number1Err = null;
$number2Err = null;
$pheptoan = null;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number1 = $_REQUEST['number1'];
    $number2 = $_REQUEST['number2'];
    $pheptoan = $_REQUEST['pheptoan'];
    $hasError = true;
    $ketqua = null;

    if (empty($number1)) {
        $number1Err = "Trường Bắt buộc!!";
        $hasError = true;
    }
    if (empty($number2)) {
        $number2Err = "Trường Bắt buộc!!!";
        $hasError = true;
    }
    if (!$hasError) {
        $number1 = null;
        $number2 = null;
    }
    try {
        $number1 = 0;
        $number2 = 0;
    } catch (Exception $e) {
        echo 'Lỗi: ', $e->getMessage('Lỗi không xác Định chỉ số'), "\n";
    }
    switch ($pheptoan) {
        case "cong":
            $pheptoan = $number1 + $number2;
            break;
        case "tru":
            $pheptoan  = $number1 + $number2;
            break;

        case "nhan":
            $pheptoan = $number1 * $number2;
            break;

        case "chia":
            $pheptoan  = $number1 / $number2;
            break;
        default:
            $pheptoan = "chưa chọn phép toán!!!!";
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
    select {
        background-color: gray;
        border-radius: 5px;
    }

    #button {
        background-color: yellowgreen;
        border-radius: 5px;
    }

    fieldset {
        width: 600px;
        border-radius: 10px;
        background-color: greenyellow;
    }

    span {
        color: red;
    }

    form {
        width: 450px;
    }
</style>

<body>
    <div>
        <form action="" method="POST">
            <fieldset>

                <legend>Ứng dụng Máy Tính</legend>


                Nhập số 1 : <input type="number" name="number1" value=""><br>
                <span class="=error">*<?php echo $number1Err ?> </span>
                Phép Toán : <select name="pheptoan" id="">
                    <option value="chua_chon">Chon</option>
                    <option value="cong">Cộng</option>
                    <option value="tru">TRừ</option>
                    <option value="nhan">Nhân</option>
                    <option value="chia">Chia</option>
                </select> <br>
                Nhập số 2: <input type="number" name="number2" id="<?php echo $number2 ?>"> <br>
                <span class="=error"> *<?php echo $number2Err ?> </span>

                <input type="submit" id="button">
                <input type="reset" value="Reset" id="button"><br>
                <span>Ketqua :<?php echo $pheptoan ?> </span>
            </fieldset>
        </form>

    </div>
</body>

</html>