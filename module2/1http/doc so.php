<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="number" name="name" placeholder=" nhạp so" require=""> <br>
        <input type="submit">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $numbers = $_REQUEST['name'];
        $so = [
            'zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'night', 'ten',
            "11" => "eleven",
            "12" => "twelf",
            "13" => "thirteen",
            "14" => "fourteen",
            "15" => "fifteen",
            "16" => "sixteen",
            "17" => "seventeen",
            "18" => "eighteen",
            "19" => "nineteen",
            '20' => 'Twenty',
            '30' => 'thirtty',
            '40' => 'forty',
            '50' => 'fifty',
            '60' => 'sixty',
            '70' => 'seventy',
            '80' => 'eightty',
            '90' => 'ninety',
            '100' => 'hundered'
        ];
        switch ($numbers) {
            case $numbers <= 20:
                echo $so[$numbers];
                break;
            case $numbers < 100:

                $sodu = $numbers % 10;

                $ten = (int)($numbers / 10) * 10;
                echo $so[$ten] . " " . $so[$sodu];
                break;
            case $numbers < 1000:
                $hundred = (int)($numbers / 100);
                $hangchuc = $numbers - ($hundred * 100);
                $sodu = $hangchuc  % 10;
                $ten = (int)($hangchuc / 10) * 10;
                echo $so[$hundred] . " " . $so[100] . " " . $so[$ten] . " " . $so[$sodu];
                break;
        }
    }
    ?>
</body>

</html>