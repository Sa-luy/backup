<?php
include "../Human_Resource_Management/class_Employee.php";
include "../Human_Resource_Management/EmployeeManager.php";

use HumanManagement1\Employee;
use HumanManagement2\EmployeeManager;

$inforHumans = [
    '1' =>  [
        'firstName' => "Nguyễn quỳnh",
        'lastName' => "như",
        'day_of_birht' => "13/2/2001",
        'address' => "Huế",
        'location' => "Manager"
    ],

    "2" => [
        "firstName" => "Nguyễn Văn ",
        'lastName' => "Nam",
        "day_of_birht" => "1983-08-20",
        "address" => "Bắc Giang",
        'location' => "Staff"
    ],
    "3" => [
        "firstName" => "Nguyễn Thái ",
        'lastName' => "Hòa",
        "day_of_birht" => "1983-08-21",
        "address" => "Nam Định",
        'location' => "Staff"
    ],
    "4" => [
        "firstName" => "Trần Đăng ",
        'lastName' => "Khoa",
        "day_of_birht" => "1983-08-22",
        "address" => "Hà Tây",
        'location' => "Staff"
    ],
    "5" => [
        "firstName" => "Nguyễn Đình ",
        'lastName' => "Thi",
        "day_of_birht" => "1983-08-17",
        "address" => "Hà Nội",
        'location' => "Secureti"
    ]
];
$use2 = new Employee("Nguyễn Tất", "Tố", "13/2/1998", "Huế", "leader");
$use3 = new Employee("Nguyễn Thái", "Học", "13/6/1872", "Huế", "secureti");
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
    table {
        background-color: greenyellow;
        border-bottom: 5px;
    }
</style>

<body>
    <form action="" method="POST">
        Họ: <input type="text"><br>
        Tên <input type="text"><br>
        Ngày sinh: <input type="text"><br>
        Địa chỉ <input type="text"><br>
        Chức vụ <input type="text"><br>
        <input type="submit" value="Thêm"><br>

    </form>
    <table border="1">
        <tr>
            <caption>Danh Sách Nhân sự</caption>
        </tr>
        <tr>
            <th>Họ</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>chức vụ</th>
        </tr>
        <?php foreach ($inforHumans as $key => $value) :  ?>
            <tr>
                <td><?php echo $value['firstName'] ?></td>
                <td><?php echo $value['lastName'] ?></td>
                <td><?php echo $value['day_of_birht'] ?></td>
                <td><?php echo $value['address'] ?></td>
                <td><?php echo $value['location'] ?></td>

            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>