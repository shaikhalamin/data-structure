<?php

class Node{

	public $data;
	public $next;

	public function __construct($data=null){
		$this->data = $data;
		$this->next = null;
	}

}

class LinkedList{
	public $head;
	public function __construct(){
		$this->head = null;
	}

	public function insert($data){
		$newNode =  new Node($data);
		$currentHead;
		if($this->head == null){
			$this->head = $newNode;
		}else{
		
			$currentHead = $this->head;
			while($currentHead->next){
				$currentHead = $currentHead.next;
			}

			$currentHead->next = $newNode;
		}
		
		//return $this->head;
		//$current->next = $newNode;
	}


}

$newList = new LinkedList();
$newList->insert(2);
 print_r($newList);
