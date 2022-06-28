<?php
class Node
{
    public $next;
    public int $score;
    public string $name;
    function __construct($name, $score)
    {
        $this->score = $score;
        $this->name = $name;
        $this->next = null;
    }
    function readNode()
    {
        $infor = ['name' => $this->name, 'score' => $this->score];
        return $infor;
    }
    function getscore()
    {
        return $this->score;
    }
    function getname()
    {
        return $this->name;
    }
}
class LinkedList
{
    public $firstNode;
    private $LastNode;
    private $count;
    function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
        $this->count = 0;
    }
    function insertLast($name, $score): void
    {
        $node = new Node($name, $score);
        $node->next = $this->firstNode;
        $this->firstNode = $node;
        if (is_null($this->lastNode)) {
            $this->lastNode = $node;
        }
    }
    function  insertFist($name, $score)
    {
        if (!(is_null($this->firstNode))) {
            $node = new Node($name, $score);
            $this->lastNode->next = $node;
            $node->next = null;
            $this->lastNode = $node;
            $this->count++;
        } else {
            $this->insertLast($name, $score);
        }
    }
    function showList()
    {
        $listData = [];
        $curent = $this->firstNode;
        while (!is_null($curent)) {
            array_push($listData, $curent->readNode());
            $curent = $curent->next;
        }
        return   $listData;
    }
    function totalStudentsFail($score)
    {
        $curent = $this->firstNode;
        while (!is_null($curent)) {
            if ($curent->getscore() < $score) {
                return $curent;
            }
            $curent = $curent->next;
        }
    }
    function FindCrossingPoint($score)
    {
        $curentNode = $this->firstNode;
        while (!is_null($curentNode)) {
            if ($curentNode->getscore() == $score) {
                return $curentNode->readNode();;
            }
        }
    }
    function studentMaxScore()
    {
        $max = 0;
        $curent = $this->firstNode;
        while (!is_null($curent)) {
            if ($curent->getscore() > $max) {
                $max = $curent->getscore();
            }
            $curent = $curent->next;
        }
        $this->FindCrossingPoint($max);
        return $max;
    }
    function findByName($name)
    {
        $curentNode = $this->firstNode;
        while (!is_null($curentNode)) {
            if ($curentNode->getname() == $name) {
                return $curentNode->readNode();
            }
        }
    }
}
$object1 = new LinkedList();
$object1->insertFist('mot', 8);
$object1->insertLast('hai', 2);
$object1->insertLast('ba', 4);
$object1->insertLast('bon', 9);
$object1->insertLast('nam', 6);
$object1->insertLast('sau', 3);
$object1->insertLast('bay', 1);
$object1->insertLast('tam', 0);
$object1->insertLast('chin', 7);
$object1->insertLast('1muoi', 8);
$object1->insertLast('muoimot', 8);
$object1->insertLast('muoi hai', 9);
echo '<pre>';
print_r($object1->studentMaxScore());
echo '\\\\\\\\\\\\\\\\\\\\';
echo '<pre>';
print_r($object1->totalStudentsFail(5));