<?php

namespace HumanManagement1;

class Employee
{
    public string $firstName;
    public string $lastName;
    public string $day_of_birht;
    public string $address;
    public string $location;
    public function __construct($firstName, $lastName, $day_of_birht, $address, $location)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->day_of_birht = $day_of_birht;
        $this->address = $address;
        $this->location = $location;
    }
    public function getFirstName()
    {
        return $this->firstName;
    }
    public function getlastName()
    {
        return $this->lastName;
    }
    public function getday_of_birht()
    {
        return $this->day_of_birht;
    }
    public function getaddress()
    {
        return $this->address;
    }
    public function getlocation()
    {
        return $this->location;
    }
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    public function setlastName($lastName)
    {
        $this->lastName = $lastName;
    }
    public function setday_of_birht($day_of_birht)
    {
        $this->day_of_birht = $day_of_birht;
    }
    public function setaddress($address)
    {
        $this->address = $address;
    }
    public function setlocation($location)
    {
        $this->location = $location;
    }
    public function getInfor()
    {
        return "Họ: " . $this->firstName . " /Tên: " . $this->lastName . " /Ngày sinh: " . $this->day_of_birht . " /Địa chỉ: " . $this->address . " /Vị trí: " . $this->address . "<br>";
    }
}
