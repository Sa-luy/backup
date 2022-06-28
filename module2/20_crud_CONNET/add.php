<?php
//ket noi CSDL
include 'db.php';

// Controller
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $TENHANG = $_REQUEST['TENHANG'];
    $MACONGTY   = 5;


    //Model
    //cau query
    $sql = "INSERT INTO MATHANG(TENHANG, MACONGTY) VALUES('$TENHANG', $MACONGTY)";
    //check sql
    //var_dump($sql);die();
    //thuc hien truy van
    $conn->exec($sql);
}
?>
<!-- VIEW -->
<form action="" method="post">
    <input type="text" name="TENHANG">
    <button type="submit">Them</button>
</form>