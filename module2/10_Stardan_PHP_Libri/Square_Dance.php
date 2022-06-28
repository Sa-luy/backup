<?php
class Dancer
{
    public string  $dancerName;
    public string  $dancerGender;
    public function __construct($danceName, $dancerGender)
    {
        $this->dancerName = $danceName;
        $this->dancerGender = $dancerGender;
    }
}

$objMale = new SplQueue;
$objFemale = new SplQueue;
$objMale->enqueue(new Dancer('Nam', 'male'));
$objMale->enqueue(new Dancer('Duong', 'male'));
$objMale->enqueue(new Dancer('linh', 'male'));
$objMale->enqueue(new Dancer('Viet', 'male'));
$objFemale->enqueue(new Dancer('Ha', 'Female'));
$objFemale->enqueue(new Dancer('D_Hau', 'female'));
$objFemale->enqueue(new Dancer('Tham', 'female'));

// echo "cặp nhảy đầu tiên";
// echo $objMale ->current()->dancerName;
$i = 0;
echo 'Danh sách cặp nhảy <br>';

while (!($objMale->isEmpty()) && !($objFemale->isEmpty())) {
    $male = $objMale->dequeue()->dancerName;
    $female = $objFemale->dequeue()->dancerName;
    echo "Cặp nhảy" . $i . ':' . $male . '::' . $female . '<br>';
    if ($objMale->isEmpty()) {
        echo " Hang doi nam da het<br>";
    } else if ($objFemale->isEmpty()) {
        echo " Hang doi nữ da het<br>";
    }
    $i++;
}
// if()

echo '<br>';
$objFemale->enqueue(new Dancer('Ngoc Anh', 'Female'));
$objFemale->enqueue(new Dancer('Thuy Ngan', 'female'));
$objFemale->enqueue(new Dancer('Hong Tham', 'female'));
echo 'Danh sách cặp nhảy Mới :<br>';

while (!($objMale->isEmpty()) && !($objFemale->isEmpty())) {
    $male = $objMale->dequeue()->dancerName;
    $female = $objFemale->dequeue()->dancerName;
    echo "Cặp nhảy" . $i . ':' . $male . '::' . $female . '<br>';
    $i++;
}
echo '<br>';
echo "danh sách hàng đợi Name<br>";
$i = 1;
if ($objMale->isEmpty()) {
    echo "Hang doi nam da rỗng,Danh sach hàng dợi Nữ:<br>";

    while (!($objFemale->isEmpty())) {
        echo "Người đợi thứ : $i:";
        echo ($objFemale->dequeue()->dancerName) . '<br>';
        $i++;
    }
} else if ($objFemale->isEmpty()) {
    echo "Hang doi nam da rỗng,Danh sach hàng dợi Nữ:<br>";

    while (!($objMale->isEmpty())) {
        echo "Người đợi thứ : $i:";
        echo ($objMale->dequeue()->dancerName) . '<br>';
        $i++;
    }
}