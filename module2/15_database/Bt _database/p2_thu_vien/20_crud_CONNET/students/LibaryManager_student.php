<?php
$username = 'root';
$password = '';
$conn = new PDO('mysql:host=localhost;dbname=bt_dtbase', $username, $password);
$sql = "SELECT * FROM `students`";
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
    <table border="1">
        <thead>
            <tr>
                <th>STT</th>
                <th>Name</th>
                <th>Adress</th>
                <th>Email</th>
                <th>Image</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($rows as $key => $row) : ?>
            <tr>
                <td><?php echo $row->student_number; ?></td>
                <td><?php echo $row->student_name; ?></td>
                <td><?php echo $row->address; ?></td>
                <td><?php echo $row->email; ?></td>
                <td><img src="<?php echo $row->image; ?>" alt="" width="100px" height="100px"></td>
                <td>
                    <a href="showstudent.php?id=<?php echo $row->student_number; ?>">Xem</a> |
                    <a href="">Sua</a> |
                    <a href="">Xoa</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>