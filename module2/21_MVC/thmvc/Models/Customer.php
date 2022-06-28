<?php
namespace Models;
use PDO;
class Customer
{
    public string $name;
    public string $email;
    public string $address;
    public int $id;
    function __construct(
        string $name,
        string $email,
        string $address
    ) {
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
    }
}