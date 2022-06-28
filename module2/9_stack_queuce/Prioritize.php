<?php
class ListNode
{
    public $name;
    public $code;
    public $next;
    function __construct($name, $code)
    {
        $this->name = $name;
        $this->code = $code;
        $this->next = null;
    }
}
class Patient
{
    private $listPatients;
    public function __construct()
    {
        $this->listPatients = [];
        $this->examineds = [];
    }
    function listPatients()
    {
        return $this->listPatients;
    }


    public function isEmpty()
    {
        return is_null($this->listPatients);
    }
    public function addPatient($name, $code)
    {
        $patient = new ListNode($name, $code);
        array_push($this->listPatients, $patient);
    }
    public function aremovePatient()
    {
        $result = array_shift($this->listPatients);
        array_push($this->examineds, $result);
    }
    //
    function sort()
    {
        function my_sort($codes, $names)
        {
            if ($codes->code == $names->code) return 1;
            return ($codes->code > $names->code) ? 1 : -1;
        }
        //dùng để sặp xếp một mảng dựa vào hàm so sánh do người dùng định nghĩa
        // hàm so sánh.
        usort($this->listPatients, "my_sort");
    }
    function toString()
    {
        return $this->listPatients;
    }
}
$obj = new Patient();
$obj->addPatient('Smith', 5);
$obj->addPatient('Jones', 4);
$obj->addPatient('Fehrenbatch', 6);
$obj->addPatient('Brow', 1);
$obj->addPatient('ingram', 1);
echo '<pre>';
print_r($obj);
$obj->sort();
$obj->aremovePatient();
$obj->aremovePatient();
echo "DS da kham uu tien<hr>";
print_r($obj->examineds);
echo "DS con lai<hr>";
print_r($obj->listPatients());