<?php
include_once "LinkedList.php";
include_once "node.php";
$linkedListOne = new LinkList;
$linkedListOne->insertFist('saluy1');
echo '<pre>';
$linkedListOne->insertLast('saluy2');
print_r($linkedListOne->firstNode);

// $linkedListOne->insertFist('saluy3');
// $linkedListOne->insertFist('saluy4');
// $linkedListOne->insertFist('saluy5');
// $linkedListOne->insertFist('saluy6');
// $linkedListOne->insertFist('saluy7');