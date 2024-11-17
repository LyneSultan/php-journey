<?php
class Node{
  public $value;
  public $next;

  public function __construct($value){
    $this->value=$value;
    $this->next=NULL;
  }
  public function __toString() {
    return $this->value;
  }
}
class LinkedList{
  public $head;

  public function __construct(){
    $this->head=NULL;
  }
  public function addNode($value){
    $node=new Node($value);

    if($this->head){
      $traversale_node=$this->head;

      while($traversale_node!==Null){
        $traversale_node=$traversale_node->next;
      }

      $traversale_node->next=$node;
    }else{
      $this->head=$node;
    }
  }
  public function __toString() {
    return $this->head->value;
  }
}
$test = new linkedList();
$test->addNode("hello");
echo $test;
