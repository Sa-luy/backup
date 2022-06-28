<?php
include 'db.php';
class OrderModell
{
    function orderbyname()
    {
        global $conn;
        $sql = "SELECT * FROM `populationlist` 
        INNER JOIN detail ON detail.id=populationlist.id 
        ORDER BY lastname;";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $rows = $stmt->fetchAll();
        return $rows;
    }
    function orderbyday()
    {
        global $conn;
        $sql = "SELECT * FROM `populationlist`
         INNER JOIN detail ON detail.id=populationlist.id
          ORDER BY day_of_birth;";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $rows = $stmt->fetchAll();
        return $rows;
    }
    function orderbygender()
    {
        global $conn;
        $sql = "SELECT * FROM `populationlist`
         INNER JOIN detail ON detail.id=populationlist.id
          ORDER BY gender;";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $rows = $stmt->fetchAll();
        return $rows;
    }
}