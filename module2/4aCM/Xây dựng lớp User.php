<?php
class User
{
    protected string $name;
    protected string $email;
    public int $role;
    public function __construct($name, $email, $role)
    {
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
    }
    public function getname()
    {
        return $this->name;
    }
    public function setname($name)
    {
        $this->name = $name;
    }
    public function getemail()
    {
        return $this->email;
    }
    public function setemail($email)
    {
        $this->email = $email;
    }
    public function getrole()
    {
        return $this->role;
    }
    public function setrole($role)
    {
        $this->role = $role;
    }
    public function get_info()
    {
        echo 'ten ' . $this->name . 'email ' . $this->email;
    }
    public function isAdmin($role)
    {
        switch ($this->role) {
            case 1:
                echo 'admin';
                break;
            case 2:
                echo 'người dùng bình thường';
                break;
            default:
                echo 'Errol';
        }
    }
}
$User1 = new User('admin', '123@jhfyf.uih', 1);
$User2 = new User('saluy', '143@jhfyf.uih', 2);
$User3 = new User('saluy', '143@jhfyf.uih', 3);

echo $User2->isAdmin(2) . '<br>';
echo $User2->get_info() . '<br>';
echo $User1->isAdmin(1) . '<br>';
echo $User1->get_info() . '<br>';
echo $User3->isAdmin(3) . '<br>';
echo $User1->get_info() . '<br>';