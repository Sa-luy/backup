<?php
$username = 'root';
$password = '';
$conn = new PDO('mysql:host=localhost;dbname=bt_dtbase', $username, $password);
$sql = "SELECT * FROM `books` ";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$rows = $stmt->fetchAll();
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
    <a href="addbook.php"><button type="subit">THêm Sách</button></a>

    <table border="1">
        <thead>
            <tr>
                <th> STT</th>
                <th>Ma Loai Sach</th>
                <th>Ten Sach</th>
                <th>Nha Xuat Ban</th>
                <th>Tac Gia</th>
                <th>Ma tac gia</th>
                <th>Nam xuat Ban</th>
                <th>Gia</th>
                <th>IMage</th>

                <th></th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($rows as $key => $row) :
            ?>
            <tr>
                <td><?php echo $row->book_id; ?></td>
                <td><?php echo $row->ma_loai_sach; ?></td>
                <td><?php echo $row->book_name; ?></td>
                <td><?php echo $row->nha_xuat_ban; ?></td>
                <td><?php echo $row->tac_gia; ?></td>
                <td><?php echo $row->ma_tac_gia; ?></td>
                <td><?php echo $row->nam_xuat_ban; ?></td>
                <td><?php echo $row->gia; ?></td>
                <td> <img src="<?php echo $row->image; ?>" alt="" width="100px" height="100px"></td>
                <td>
                    <a href="showbook.php?id=<?php echo $row->book_id; ?>">Xem</a> |
                    <a href="edit_book.php?id=<?php echo $row->book_id; ?>">Sua</a> |
                    <a href="delete_book.php?id=<?php echo $row->book_id; ?>">xoa</a> |


                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>