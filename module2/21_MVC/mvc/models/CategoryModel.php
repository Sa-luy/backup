<?php
    include_once 'Database.php';
    class CategoryModel {
        //lấy tất cả records
        public function getAll(){
            global $conn;
            $sql = "SELECT * FROM `categories`";
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $rows = $stmt->fetchAll();
            return $rows;
        }

        //lấy duy nhất 1 record theo ID
        public function find( $id ){

        }

        //chèn vào CSDL
        public function store( $data ){

        }

        //cập nhật dữ liệu
        public function update( $id, $data){
            
        }
    }