<?php
$mang = array(1, 5, 9, 2, 4, 9); // mảng theo đề bài
  
$sophantu = 6; // hoặc dùng hàm $sophantu = count($mang);
  
// Sắp xếp mảng
for ($i = 0; $i < ($sophantu - 1); $i++)
{
    for ($j = $i + 1; $j < $sophantu; $j++) // lặp các phần tử phía sau
    {
        if ($mang[$i] > $mang[$j]) // nếu phần tử $i bé hơn phần tử phía sau
        {
            // hoán vị
            $tmp = $mang[$j];
            $mang[$j] = $mang[$i];
            $mang[$i] = $tmp;
        }
    }
}
  
// Hiển thị các phần tử của mảng đã sắp xếp
for ($i = 0; $i < $sophantu; $i++){
    echo $mang[$i] . ' '; 
}
?>