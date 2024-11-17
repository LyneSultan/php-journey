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
  public function countVowels($str) {
    $vowels = ['a', 'e', 'i', 'o', 'u','A', 'E', 'I', 'O', 'U'];
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], $vowels)) {
            $count++;
        }
    }

    return $count;
}
  public function print() {
    $traversal_node=$this->head;

    while($traversal_node!==NULL){

      if($this->countVowels($traversal_node->value)==2){
        echo $traversal_node->value;
      }
      $traversal_node = $traversal_node->next;
    }
  }
}
$test = new linkedList();
$test->addNode("hele");
$test->print();
