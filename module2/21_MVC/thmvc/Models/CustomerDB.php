<?php
// namespace Models;

// use PDO;
include 'DBConnection.php';
class customerDB
{

    public function create($data)
    {
        $db = new DBConnection();
        $db = $db->connect();
        print_r($data);
        // $sql = "INSERT INTO customers
        // VALUES("$data->name", "$data->email", "$data->address");";
        // $stmt = $this->db->prepare($sql);
        // return $stmt->exec();
    }
}