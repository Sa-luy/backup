<?php
$username = 'root';
$password = '';
$conn = new PDO('mysql:host=localhost;dbname=bt_dtbase', $username, $password);


//cau truy van
$sql = "SELECT * FROM `tacgia` ORDER BY `tacgia`.`ma_tac_gia` ASC";

//truyen cau truy van vao
$stmt = $conn->query($sql);

//Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ);

//fetchALL se tra ve du lieu nhieu hon 1 ket qua
$rows = $stmt->fetchAll();

// echo '<pre>';
// print_r($rows);
// die();

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
tr:nth-child(even) {
    background: #CCC
}

tr:nth-child(odd) {
    background: #FFF
}
</style>

<body>


    <table border="1">
        <thead>
            <tr>
                <th>Ma tac gia</th>
                <th>Ten Tac Gia</th>
                <th>Sach</th>

                <th></th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($rows as $key => $row) :
            ?>
            <tr>
                <td><?php echo $row->ma_tac_gia; ?></td>
                <td><?php echo $row->tac_gia; ?></td>
                <td><?php echo $row->book_name; ?></td>
                <td>
                    <a href="showAuther.php?id=<?php echo $row->ma_tac_gia; ?>">Xem</a> |
                    <a href="edit_auther.php?id=<?php echo $row->ma_tac_gia; ?>">Sua</a> |
                    <a href="">Xoa</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>