<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
    background-color: greenyellow;
}

th,
td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
</style>

<body>
    <form method="GET">
        Chọn ngày sinh từ: <input id="tu" type="date" name="tu" placeholder="yyyy/mm/dd" value="" />
        đến: <input id="den" type="date" name="den" placeholder="yyyy/mm/dd" value="" />
        <input type="submit" id="submit" value="Lọc" />
    </form>
    <table border="1">
        <caption>
            <h1>Danh sách khách hàng</h1>
        </caption>
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Dịa chỉ</th>
            <th>Ảnh</th>

            <?php

            $listCustomer = [
                "1" => [
                    "ten" => "Mai Văn Hoàn",
                    "ngaysinh" => "1983-08-20",
                    "diachi" => "Hà Nội",
                    "anh" => "images/img1.jpg"
                ],
                "2" => [
                    "ten" => "Nguyễn Văn Nam",
                    "ngaysinh" => "1983-08-20",
                    "diachi" => "Bắc Giang",
                    "anh" => "images/img2.jpg"
                ],
                "3" => [
                    "ten" => "Nguyễn Thái Hòa",
                    "ngaysinh" => "1983-08-21",
                    "diachi" => "Nam Định",
                    "anh" => "images/img3.jpg"
                ],
                "4" => [
                    "ten" => "Trần Đăng Khoa",
                    "ngaysinh" => "1983-08-22",
                    "diachi" => "Hà Tây",
                    "anh" => "images/img4.jpg"
                ],
                "5" => [
                    "ten" => "Nguyễn Đình Thi",
                    "ngaysinh" => "1983-08-17",
                    "diachi" => "Hà Nội",
                    "anh" => "images/img5.jpg"
                ]
            ];

            ?>
            <?php foreach ($listCustomer  as $key => $value) : ?>
        <tr>
            <td><?php echo $key ?></td>
            <td><?php echo $value['ten'] ?></td>
            <td><?php echo $value['ngaysinh'] ?></td>
            <td><?php echo $value['diachi'] ?></td>
            <td><img src="<?php echo $value['anh'] ?>" alt="" width="200"></td>
        </tr>

        <?php endforeach; ?>
        <?php
    function seachDay($customs, $tungay, $denngay)
    {
        if (empty($tungay) || empty($denngay)) {
            return $customs;
        }
        $seachCustoms = [];
        foreach ($customs as $customs) {
            if (strtotime($customs['ngaysinh']) < strtotime($tungay) || strtotime($customs['ngaysinh']) > strtotime($denngay)) {
                continue;
            }
            $seachCustoms[] = $customs;
        }

        return $seachCustoms;
    };
    $tungay = null;
    $denngay = null;
    // echo $_REQUEST;
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $tungay = $_REQUEST['tu'];
        $denngay = $_REQUEST['den'];
    }
    $seachCustoms = seachDay($listCustomer, $tungay, $denngay);
    ?>
        </tr>
    </table>
    <table border="0">
        <caption>
            <h2>Danh sách khách hàng tim kiem</h2>
        </caption>
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Ảnh</th>
        </tr>
        <?php foreach ($seachCustoms as $index => $customs) : ?>
        <tr>
            <td><?php echo $index ?></td>
            <td><?php echo $customs['ten'] ?></td>
            <td><?php echo $customs['ten'] ?></td>
            <td><?php echo $customs['ten'] ?></td>
            <td><img src="<?php echo $value['anh'] ?>" alt="" width="200"></td>
        </tr>
        <?php endforeach; ?>

</body>

</html>