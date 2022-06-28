<?php
class Student
{
    public string $name;
    private string $email;
    protected array $favoriter;
    private static string $school = "Gg";
    public function __construct($name, $email, $favoriter)
    {
        $this->name = $name;
        $this->email = $email;
        $this->favoriter = $favoriter;
    }
    public function getemail()
    {

        return $this->email;
    }
    public static function get_shool()
    {
        return self::$school;
    }
}
$array = ['code', 'gym'];
$sa_luy = new Student('saluy', 'jockersaluy@gmail.com<br>', $array);
echo $sa_luy->name;
echo $sa_luy->getemail() . '<br>';
echo Student::get_shool();
// echo "<pre>";
// print_r($sa_luy->$favoriter);