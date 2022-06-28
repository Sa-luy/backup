<?php
include 'db.php';

//cau truy van
$sql = "SELECT * FROM `c10_mat_hang`";

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

<table border="1">
    <thead>
        <tr>
            <th>MAHANG</th>
            <th>TENHANG</th>
            <th>MACONGTY</th>
            <th>MALOAIHANG</th>
            <th>SOLUONG</th>
            <th>DONVITINH</th>
            <th>GIAHANG</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($rows as $key => $row) : ?>
        <tr>
            <td><?php echo $row->MAHANG; ?></td>
            <td><?php echo $row->TENHANG; ?></td>
            <td><?php echo $row->MACONGTY; ?></td>
            <td><?php echo $row->MALOAIHANG; ?></td>
            <td><?php echo $row->SOLUONG; ?></td>
            <td><?php echo $row->DONVITINH; ?></td>
            <td><?php echo $row->GIAHANG; ?></td>
            <td>
                <a href="show.php?id=<?php echo $row->MAHANG; ?>">Xem</a> |
                <a href="">Sua</a> |
                <a href="">Xoa</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>