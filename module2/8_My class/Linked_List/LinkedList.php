<?php
class ListNode
{
    public $data;
    public $next;
    function __construct($data)
    {
        $this->data = $data;
        $this->next = NULL;
    }

    function readNode()
    {
        return $this->data;
    }
}

class LinkList
{
    public $firstNode;
    public $lastNode;
    public $count;

    function __construct()
    {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
        $this->count = 0;
    }

    //ichèn vào đầu danh sách liên kết
    public function insertFirst($data)
    {
        $Node = new ListNode($data); // hởi tạo đọi tượng node
        $Node->next = $this->firstNode; //Node gọi đến thuộc tinh next gán bằng node dâu của linkedlist
        $this->firstNode = &$Node; // node đấuẽ tham chiếu dếnđối tương node vừa tạo.
        //khi giá trị của node đầu trong linked lít thay  đổi  thì giá trị của nói tượng node vừa tạo cũng thay đổ theo

        /* Nếu đây là nút đầu tiên được chèn vào danh sách
           sau đó đặt con trỏ LastNode cho nó.
        */
        if ($this->lastNode == NULL)// nếu nút cuois cùng là rỗng
            $this->lastNode = &$Node;//thì gán nút cuois là nút vưa khởi tạo
        $this->count++;// độ dài
    }


    //displaying all nodes of linklist
    public function readList()
    {
        $listData = array();
        $current = $this->firstNode;
        while ($current != NULL) {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        foreach ($listData as $v) {
            echo $v . " ";
        }
    }

    //đi ngang qua tất cả các nút của danh sách được liên kết
    public function reverseList()
    {
        if ($this->firstNode != NULL) {
            if ($this->firstNode->next != NULL) {
                $current = $this->firstNode;
                $new = NULL;

                while ($current != NULL) {
                    $temp = $current->next;
                    $current->next = $new;
                    $new = $current;
                    $current = $temp;
                }
                $this->firstNode = $new;
            }
        }
    }



    //deleting a node from linklist $key is the value you want to delete
    public function deleteNode($key)
    {
        $current = $this->firstNode;
        $previous = $this->firstNode;

        while ($current->data != $key) {
            if ($current->next == NULL)
                return NULL;
            else {
                $previous = $current;
                $current = $current->next;
            }
        }

        if ($current == $this->firstNode) {
            if ($this->count == 1) {
                $this->lastNode = $this->firstNode;
            }
            $this->firstNode = $this->firstNode->next;
        } else {
            if ($this->lastNode == $current) {
                $this->lastNode = $previous;
            }
            $previous->next = $current->next;
        }
        $this->count--;
    }


    //empty linklist
    public function emptyList()
    {
        $this->firstNode == NULL;
    }


    //insertion at index

    public function insert($NewItem, $key)
    {
        if ($key == 0) {
            $this->insertFirst($NewItem);
        } else {
            $link = new ListNode($NewItem);
            $current = $this->firstNode;
            $previous = $this->firstNode;

            for ($i = 0; $i < $key; $i++) {
                $previous = $current;
                $current = $current->next;
            }

            $previous->next = $link;
            $link->next = $current;
            $this->count++;
        }
    }
}

$obj = new LinkList();
$obj->insertFirst('saluy1');
$obj->insertFirst('saluy2');
$obj->insertFirst('saluy3');
$obj->insert('saLuy', 2); // at any index
$obj->deleteNode('saluy1');

$obj->insert('saluy_7', 2);
$obj->insert('saLuy_9', 1); // at any index

// echo '<pre>';
// print_r($obj->readList());
var_dump($obj->firstNode);