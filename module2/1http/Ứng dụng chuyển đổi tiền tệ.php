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
    border-radius: 20px;
    background-color: grey;
}
</style>

<body>
    <fieldset>
        <center>
            <legend> <strong style="font-size: 30px;">Chuyển Đổi Tiền Tệ</strong> </legend>
        </center>
        <form action="" method="POST">
            <label for="1">Số tiền Quy Đổi:</label>
            <input type="text" name="sotien" id="1"> <br>
            <select name="country1" id="">
                <option>VND</option>
                <option>USD</option>
            </select> <br>
            <label for="2">Đổi sang</label> <br>
            <select name="country2" id="">
                <option>USD</option>
                <option>VND</option> <br>
            </select>
            <input type="submit" value="Chuyển Đổi">

        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $money1 = $_REQUEST['sotien'];
            $country1 = $_REQUEST['country1'];
            $country2 = $_REQUEST['country2'];
            if ($country1 == 'VND' && $country2 == 'USD') {
                $result = $money1 / 23000;
            } else if ($country1 == 'USD' && $country2 == 'VND') {
                $result = $money1 * 23000;
            } else {
                echo $money1;
            }
            echo $result;
        }
        ?>
    </fieldset>
</body>

</html>