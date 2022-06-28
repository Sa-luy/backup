<?php
include "../ResourceManagement/Employee.php";
include "../ResourceManagement/EmployeeManager.php";

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
    width: 800px;
    border-radius: 10px;
}

tr {
    background-color: gray;
}

caption {
    background-color: #ffb100;
}

#submit {
    background-color: yellowgreen;
    border-radius: 5px;
}

#delete {
    background-color: red;
}

#edit {
    background-color: yellow;
}
</style>

<body>

    <form action="" method="POST">
        <table border="1">
            <tr>
                <td>Họ : </td>
                <td> <input type="text"></td>
            </tr>
            <tr>
                <td>Tên :</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Ngày sinh:</td>
                <td><input type="date"></td>
            </tr>
            <tr>
                <td> Địa chỉ :</td>
                <td><input type="text"></td>
            </tr>
            <br>
            <tr>
                <td> Chức vụ :</td>
                <td><input type="text"></td>
            </tr>

        </table>
        <input type="submit" value="Thêm" id="submit"><br>

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
            <td><input type="button" value="Delete" id="delete"></td>
            <td><input type="button" value="Edit" id="edit"></td>


        </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>