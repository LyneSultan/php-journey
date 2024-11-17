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
$node1 = new Node("test");
echo $node1;
