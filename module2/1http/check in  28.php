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
        <input type="number" name="so1" require="">
        <input type="number" name="so2" require="">
        <select name="pheptoan" id="">
            <option>+</option>
            <option>-</option>
            <option>x</option>
            <option>:</option>
            <input type="submit">
        </select>
        <?php


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $number1 = $_REQUEST['so1'];
            $number2 = $_REQUEST['so2'];
            $pheptoan = $_REQUEST['pheptoan'];
            if ($number1 == null || $number2 == null) {
                echo "loi nhaap so";
            } else {
                switch ($pheptoan) {
                    case '+':
                        echo $number1 + $number2;
                        break;
                    case '-':
                        echo $number1 - $number2;
                        break;
                    case 'x':
                        echo $number1 * $number2;
                        break;
                    case ':':
                        echo $number1 / $number2;
                        break;
                }
            }
        }
        ?>
    </form>
</body>

</html>