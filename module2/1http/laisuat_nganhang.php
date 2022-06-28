<?php
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
    <form action="" method="post">
        <label for="1">Inventment Amount:</label>
        <input type="text" name="tien_gui" id="1" placeholder="Số Tien gửi"> <br>
        <label for="2">Yearly Interest Rate:</label>
        <input type="text" name="tien_lai" id="2" placeholder="Nhập dưới dạng 0.xx"> <br>
        <label for="3">Number of Years:</label>
        <input type="text" name="so_nam" id="3" placeholder="Thời hạn gửi(tính năm)"> <br>
        <input type="submit" value="Tính Tổng">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $tiengui = $_REQUEST['tien_gui'];
        $tienlai = $_REQUEST['tien_lai'];
        $sonam = $_REQUEST['so_nam'];
        $total = $tiengui;
        for ($i = 1; $i <= $sonam; $i++) {
            $total += ($total * $tienlai);
            echo $total . "nam thu" . $i . '<br>';
        };
        echo "Giá trị Tương lai la : " . $total;
    }
    ?>
</body>

</html>