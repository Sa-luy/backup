<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
</head>
<style>
tr:nth-child(even) {
    background: #CCC
}

tr:nth-child(odd) {
    background: #FFF
}

tr,
td {
    border: 1px solid red;
    padding: 5px;

}
</style>

<body>
    <div class="class">
        <table>
            <tr>
                <th>bookid</th>
                <th>bookName</th>
                <th>nha_XS</th>
                <th>Tac Gia</th>
                <th>Nam XB</th>
                <th>Gia</th>
                <th>Image</th>
            </tr>
            <?php
            require "conect.php";
            $conn = new mysqli('localhost', 'root', '', 'bt_dtbase');
            $sql = "SELECT * FROM books";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo "          <tr>
                <td>" . $row['book_id'] . "</td>
                <td>" . $row['book_name'] . "</td>
                <td>" . $row['nha_xuat_ban'] . "</td>
                <td>" . $row['tac_gia'] . "</td>
                <td>" . $row['nam_xuat_ban'] . "</td>
                <td>" . $row['gia'] . "</td>
                <td> null </td>
            </tr>";
            }
            $conn->close();
            ?>
        </table>
    </div>
</body>

</html>