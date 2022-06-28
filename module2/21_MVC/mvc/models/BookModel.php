<?php
include_once 'Database.php';
class BookModel
{
    //lấy tất cả records
    public function getAll()
    {
        global $conn;
        $sql = "SELECT * FROM `books`";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $rows = $stmt->fetchAll();
        return $rows;
    }

    //lấy duy nhất 1 record theo ID
    public function find($id)
    {
    }

    //chèn vào CSDL
    public function store($data)
    {
        echo 'them du lieu thanh cong';
    }

    //cập nhật dữ liệu
    public function update($id, $data)
    {
        echo 'capnhat du lieu thanh cong';

        
    }
}