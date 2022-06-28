<?php
// $obj = new SplStack();
// $obj->push('Luy');
// $obj->push('uongC');
// $obj->push('duong');
// $obj->push('vit');
// $obj->push('Hai');
// $obj->rewind();
// echo "<pre>";
// echo ($obj->current());
// echo '<br>';
// print_r($obj);


// $obj = new SplQueue();
// $obj->enqueue('Saluy_1');
// $obj->enqueue('Saluy_2');
// $obj->enqueue('Saluy_3');
// $obj->enqueue('Saluy_4');
// $obj->enqueue('Saluy_5');
// echo '<pre>';
// print_r($obj);
// $obj->dequeue();
// print_r($obj);
$obj = new  SplDoublyLinkedList();
echo $obj->isEmpty();
$obj->push('Saaluy_11');
$obj->push('Saaluy_22');
$obj->push('Saaluy_33');
$obj->push('Saaluy_44');
// echo $obj->isEmpty();
// $obj->pop();
// echo '<pre>';
// var_dump($obj);
// echo $obj->isEmpty();
echo "FIFO\n";
$obj->setIteratorMode(SplDoublyLinkedList::IT_MODE_FIFO);
for ($obj->rewind(); $obj->valid(); $obj->next) {
    echo $obj->current();
}
