<?php
include "Class_List.php";
$listName = new ArrayList();
$listName->add('Ha');
$listName->add('Nam');
$listName->add('Lan');
$listName->add('Thuy');
$listName->add('Saluy');
echo $listName->get(1);