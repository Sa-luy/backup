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
    /* background-color: green; */
    border: 10px;
    border-radius: 10px;
    border-collapse: collapse;
    width: auto;
    border-color: red;

}


th,
td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
    border-color: red;
}
</style>

<body>
    <div>
        <?php
        $listCustoms = [
            "1" => [
                "name" => "Mai Văn Hoàn",
                "day_of_birth" => "1983/08/20",
                "address" => "Hà Nội",
                "profile" => "images/img1.jpg"
            ],
            "2" => [
                "name" => "Nguyễn Văn Nam",
                "day_of_birth" => "1983/08/21",
                "address" => "Bắc Giang",
                "profile" => "images/img2.jpg"
            ],
            "3" => [
                "name" => "Nguyễn Thái Hòa",
                "day_of_birth" => "1983/08/22",
                "address" => "Nam Định",
                "profile" => "images/img3.jpg"
            ],
            "4" => [
                "name" => "Trần Đăng Khoa",
                "day_of_birth" => "1983/08/17",
                "address" => "Hà Tây",
                "profile" => "images/img4.jpg"
            ],
            "5" => [
                "name" => "Nguyễn Đình Thi",
                "day_of_birth" => "1983/08/19",
                "address" => "Hà Nội",
                "profile" => "images/img5.jpg"
            ]
        ];
        function seachDay($customs, $fromDate, $toDate)
        {
            if (empty($fromDate) || empty($toDate)) {
                return $customs;
            }
            $newList = [];
            foreach ($customs as $custom) {
                if (strtotime($fromDate) > strtotime($custom['day_of_birth']))
                    continue;

                if (strtotime($toDate) < strtotime($custom['day_of_birth']))

                    continue;
                $newList[] = $custom;
            }
            return $newList;
        };
        ?>
        <table border="1" id="abc">
            <tr>
                <caption style="background-color: green; height: 50px;  ">Danh Sách Khách Hàng</caption>
            </tr>
            <tr>
                <th>Number</th>
                <th>Name</th>
                <th>Birth_day</th>
                <th>Address</th>
                <th>Image</th>
            </tr>
            <?php foreach ($listCustoms as $key => $value) : ?>

            <tr>
                <td><?php echo $key ?></td>
                <td><?php echo $value['name'] ?></td>
                <td><?php echo $value['day_of_birth'] ?></td>
                <td><?php echo $value['address'] ?></td>
                <td><img src="<?php echo $value['profile'] ?>" width="100"></td>
            </tr>
            <?php endforeach; ?>
        </table><br>
        <form action="" method="GET">
            Lọc khách hàng có ngày sinh từ: <input type="date" name="fromdate"></input>
            Đến :<input type="date" name="todate"></input>
            <input type="submit" value="Lọc" onclick="antable()">
        </form>
    </div>
    <h2>Kết Quả</h2>
    <?php

    $fromDate = null;
    $toDate = null;
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $fromDate = $_REQUEST['fromdate'];
        $toDate = $_REQUEST['todate'];

        $newList = seachDay($listCustoms, $fromDate, $toDate);
    }
    ?>
    <table border="1">
        <tr>
            <caption style="background-color: gray;"> List Customs Seach</caption>
        </tr>
        <tr>
            <th>Number</th>
            <th>Name</th>
            <th>Birth Day</th>
            <th>Address</th>
            <th>Profile</th>
        </tr>
        <?php foreach ($newList as $index => $custom) : ?>
        <tr>
            <td><?php echo $index + 1  ?></td>
            <td><?php echo $custom['name'] ?></td>
            <td><?php echo $custom['day_of_birth'] ?> </td>
            <td><?php echo $custom['address'] ?> </td>
            <td><img src=" <?php echo $custom['profile'] ?> " width="50"></td>
            <?php endforeach; ?>
        </tr>
    </table>

</body>
<script>
function antable() {
    var Table = document.getElementById("abc");
    Table.innerHTML = "";


}
</script>

</html>