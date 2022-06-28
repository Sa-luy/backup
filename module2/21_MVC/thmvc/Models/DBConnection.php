<?php

// namespace Models;

// use PDO;
// use PDOException;

// class DBConnection
// {
//     public string $dsn;
//     public string $user;
//     public string $password;
//     function __construct(
//         string $dsn,
//         string $user,
//         string $password
//     ) {
//         $this->dsn = $dsn;
//         $this->user = $user;
//         $this->password = $password;
//     }
//     public function connect()
//     {
//         echo 'success';
//         return new PDO($this->dsn, $this->user, $this->password);
    // }
// }
class DBConnection {
    public function connect() {
        $hostname = 'localhost';
        $db_name = 'mvc_th';
        $username = 'root';
        $password = '';
        $dsn = "mysql:host=$hostname; dbname=$db_name";

        try {
            $connect = new PDO($dsn, $username, $password);
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'kết nối thành công';
            return $connect;
        } catch (PDOException $e) {
            echo 'Kết nối thất bại: ' . $e->getMessage();
        }
    }
}