<?php
//node structure
class Node {
public $data;
public $next;
function __construct()
{
 $this->data=null;
$this->next=null;   
}
}

class LinkedList {
public $head;

public function __construct(){
$this->head = null;
}

//Add new element at the end of the list
public function insertLast($newElement) {
$newNode = new Node();
$newNode->data = $newElement;
$newNode->next = null;
if($this->head == null) {
$this->head = $newNode;
} else {
$temp = new Node();
$temp = $this->head;
while($temp->next != null) {
$temp = $temp->next;
}
$temp->next = $newNode;
}
}

//Inserts a new element at the given position
public function push_at($newElement, $position) {
$newNode = new Node();
$newNode->data = $newElement;
$newNode->next = null;

if($position < 1) { echo "\nposition should be >= 1." ; } else if ($position==1) { $newNode->next = $this->head;
    $this->head = $newNode;
    } else {

    $temp = new Node();
    $temp = $this->head;
    for($i = 1; $i < $position-1; $i++) { if($temp !=null) { $temp=$temp->next;
        }
        }

        if($temp != null) {
        $newNode->next = $temp->next;
        $temp->next = $newNode;
        } else {
        echo "\nThe previous node is null.";
        }
        }
        }
        
        //display the content of the list
        public function PrintList() {
        $temp = new Node();
        $temp = $this->head;
        if($temp != null) {
        echo "The list contains: ";
        while($temp != null) {
        echo $temp->data." ";
        $temp = $temp->next;
        }
        echo "\n";
        } else {
        echo "The list is empty.\n";
        }
        }
        };
        
        // test the code
        $MyList = new LinkedList();
        
        //Add three elements at the end of the list.
        $MyList->insertLast('Luy');
        $MyList->insertLast('Cường');
        $MyList->insertLast('Hải');
        echo '
        <pre>';
//print_r($MyList);

//Insert an element at position 2
$MyList->push_at('Tâm', 2);
//print_r($MyList);

//Insert an element at position 1
$MyList->push_at('Việt', 1);
$MyList->push_at('Linh', 3);
print_r($MyList);
 
?>