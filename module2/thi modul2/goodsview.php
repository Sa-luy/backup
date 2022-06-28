<?php
include 'connect.php';

$sql = "SELECT * FROM `hang_hoa`";
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

<body>

    <form action="search.php">Tim kiem
        <input type="text" name="ten_hang" placeholder=" Nhập tên muôn tìm">
        <input type="submit">

    </form>
    <a href="add.php">Them moi</a>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Danh Sach San Pham</h6>
                    <table class="table" border="1">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Ten Hang</th>
                                <th scope="col">Loai Hang</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($rows as $row) : ?>
                            <tr>
                                <th scope="row"><?= $row->ma_hang ?></th>
                                <td><?= $row->ten_hang ?></td>
                                <td><?= $row->loai_hang ?></td>
                                <td><a href="edit.php?id=<?php echo $row->ma_hang; ?>">Chinh sua |</a>
                                    <a href="delete.php?id=<?php echo $row->ma_hang; ?>"
                                        onclick="confirm('Bạn Có Muốn Xóa !!  <?= $row->ten_hang ?>')">Xoa</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>