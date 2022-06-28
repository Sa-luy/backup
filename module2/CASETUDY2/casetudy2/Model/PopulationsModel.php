<?php
include './db.php';
// echo 'to Modell<hr>';
class PopulationsModell
{
    public string $tableone = 'populationlist';
    public string $tabletwo = 'detail';
    public function getAll()
    {
        global $conn;
        $sql = "SELECT * FROM `detail` INNER JOIN populationlist ON populationlist.id=detail.id;";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $rows = $stmt->fetchAll();
        return $rows;
    }
    public function getlimit()
    {
        global $conn;
        $sql = "SELECT * FROM `detail` INNER JOIN populationlist ON populationlist.id=detail.id LIMIT 10;";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $rows = $stmt->fetchAll();
        return $rows;
    }

    public function detail($id)
    {
        global $conn;
        $id = $_GET['id'];
        $sql = "SELECT * FROM `populationlist` 
        INNER JOIN detail 
        ON detail.id=populationlist.id 
        WHERE populationlist.id ='$id';";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $row = $stmt->fetch();
        // var_dump($row);
        // die;
        return $row;
    }
    public function add()
    {
        // echo '<pre>';
        // print_r($_REQUEST);
        // die();
        global $conn;
        $fistname = $_REQUEST['fistname'];
        $lastname = $_REQUEST['lastname'];
        $day_of_birth = $_REQUEST['day_of_birth'];
        $gender = $_REQUEST['gender'];
        $cccd = $_REQUEST['cccd'];
        $phone = $_REQUEST['phone'];
        $address = $_REQUEST['address'];
        $sql = "INSERT INTO populationlist
                    VALUES(null,'$fistname','$lastname','$day_of_birth');
        INSERT INTO detail
                    VALUES (null,'$cccd',  '$address', '$phone','$gender');";
        // echo '<pre>';
        // echo ($mysql);
        // die;
        $conn->exec($sql);
    }
    public function delete($id)
    {
        // var_dump($id);
        // die();
        global $conn;
        $sql = "DELETE FROM populationlist WHERE id = $id;
        DELETE FROM detail WHERE id = $id";
        $conn->exec($sql);
    }
    public function edit($id)
    {
        global $conn;
        $fistname = $_REQUEST['fistname'];
        $lastname = $_REQUEST['lastname'];
        $day_of_birth = $_REQUEST['day_of_birth'];
        $gender = $_REQUEST['gender'];
        $cccd = $_REQUEST['cccd'];
        $phone = $_REQUEST['phone'];
        $address = $_REQUEST['address'];

        $sql = "UPDATE populationlist
        SET `fistname` = '$fistname', `lastname` = '$lastname', `day_of_birth` = '$day_of_birth'
        WHERE `populationlist`.id = $id;
        UPDATE $this->tabletwo
        SET  `cccd` = '$cccd' ,phone='$phone',`address`='$address',gender = '$gender'
         WHERE `detail`.id = $id;";
        $conn->exec($sql);
    }
    public function search($search)
    {
        global $conn;
        $sql = "SELECT * FROM `detail` 
        INNER JOIN populationlist 
        ON populationlist.id=detail.id 
        WHERE lastname LIKE '$search%'";

        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $rows = $stmt->fetchAll();
        return $rows;
    }
}