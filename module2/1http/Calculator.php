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
    background-color: greenyellow;
    width: 250px;
    margin-left: 500px;
    border-radius: 20px;
}
</style>

<body>
    <form action="" method="POST">
        <fieldset with="auto">
            <h1><strong>Simple Caculator</strong></h1>
            <label for="1">Fist Operand: </label>
            <input type="text" id="1" name="number1"> <br> <br>
            <label for="1">Operator: </label>
            <select name="cacu" id="">
                <option>Addtion</option>
                <option>Subtraction</option>
                <option>Multiplication</option>
                <option>Share Calculation</option>
            </select> <br> <br>
            <label for="2">Second Operand: </label>
            <input type="text" id="2" name="number2"> <br>
            <input type="submit" value="Caculatol">

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $number1 = $_REQUEST['number1'];
                $number2 = $_REQUEST['number2'];
                $cacu = $_REQUEST['cacu'];

                switch ($cacu) {
                    case ($number1 == null || $number2 == null):
                        $Result = 'chua nhap so';
                        break;
                    case 'Addtion':
                        $Result = $number1 + $number2;
                        break;
                    case 'Subtraction':
                        $Result = $number1 - $number2;
                        break;
                    case 'Multiplication':
                        $Result = $number1 * $number2;
                        break;
                    case 'Share Calculation':
                        $Result = $number1 / $number2;
                        break;
                }
                echo "ket qua: " . $Result;
            }

            ?>
    </form>
    </fieldset>
</body>

</html>