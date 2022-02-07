<?php
//node structure
class Node {
  public $data;
  public $next;
}

class LinkedList {
  public $head;

  public function __construct(){
    $this->head = null;
  }
  
  //Add new element at the end of the list
  public function push_back($newElement) {
    $newNode = new Node();
    $newNode->data = $newElement;
    $newNode->next = null;
    if ($this->head == null) {
      $this->head = $newNode;
    }else{
      $temp = new Node();
      $temp = $this->head;
      while($temp->next != null){
        $temp = $temp->next;
      }
      $temp->next = $newNode;
    }  
  }

  //Delete an element at the given position
  public function pop_at($position) { 
    if ($position <0) {
      echo 'Position should be more than 0';
    }elseif($position == 0 && $this->head != null){
  
  $nodeDelete = $this->head;
  $this->head = $this->head->next;
  $nodeDelete = null;
    }else{
      $temp = new Node;
      $temp = $this->head;
      for ($i=0; $i <$position-1 ; $i++) { 
        if ($temp != null){
          $temp = $temp->next;
        }
        }
        if ($temp != null && $temp->next != null) {
          $nodeDelete = $temp->next;
          $temp->next = $temp->next->next;
          $nodeDelete = null;
        }else{
           echo "\nThe node is already null.";
        }
      }
    }

  //display the content of the list
  public function PrintList() {

    $temp = new Node();
    $temp = $this->head;
    if ($temp != null) {
      echo 'The list contains : ';
      while($temp != null){
        echo  $temp->data. ' ' . '<br>';
        $temp = $temp->next;
      }
       echo "\n";

    }else{
      echo 'list is empty';
    }
  }

  //delete all nodes of the list
  public function deleteAllNodes() {
    $temp = new Node();
    while($this->head != null) {
      $temp = $this->head;
      $this->head = $this->head->next;
      $temp = null;
    }
    echo "All nodes are deleted successfully.\n"; 
  }   


    //count nodes in the list
  public function countNodes() {
    $temp = new Node();
    $temp = $this->head;
    $i = 0;
    while($temp != null) {
      $i++;
      $temp = $temp->next;
    }
    return $i;  
  }


   //delete even nodes of the list
  public function deleteEvenNodes() {
    if($this->head != null) {
      $oddNode = $this->head;
      $evenNode = $this->head->next; 
      while($oddNode != null && $evenNode != null) {
        $oddNode->next = $evenNode->next;
        $evenNode = null;
        $oddNode = $oddNode->next;
        if($oddNode != null)
          $evenNode = $oddNode->next;
      }
    }
  }  


  //delete odd nodes of the list
  public function deleteOddNodes() {
    if($this->head != null) {
      $temp = $this->head;
      $this->head = $this->head->next;
      $temp = null;
      if($this->head != null) { 
        $evenNode = $this->head;
        $oddNode = $this->head->next; 
        while($evenNode != null && $oddNode != null) {
          $evenNode->next = $oddNode->next;
          $oddNode = null;
          $evenNode = $evenNode->next;
          if($evenNode != null)
            $oddNode = $evenNode->next;
        }
      }
    }
  }


   //Search an element in the list
  public function SearchElement($searchValue) {
    $temp = new Node();
    $temp = $this->head;
    $found = 0;
    $i = 0;

    if($temp != null) {
      while($temp != null) {
        $i++;
        if($temp->data == $searchValue) {
          $found++;
          break;
        }
        $temp = $temp->next;
      }
      if ($found == 1) {
        echo $searchValue." is found at index = ".$i.".\n";
      } else {
        echo $searchValue." is not found in the list.\n";
      }
    } else {
      echo "The list is empty.\n";
    }
  }



  //Delete first node by key
  public function pop_first($key) {     
    $temp = $this->head;
    if($temp != null) {
      if($temp->data == $key) {
        $nodeToDelete = $this->head;
        $this->head = $this->head->next;
        $nodeToDelete = null;
      } else {
        while($temp->next != null) {
          if($temp->next->data == $key) {
            $nodeToDelete = $temp->next;
            $temp->next = $temp->next->next;
            $nodeToDelete = null;
            break; 
          }
          $temp = $temp->next;
        }
      }
    }
  }


  //Delete last node by key
  public function pop_last($key) {       
    if($this->head != null) {
      $temp = new Node(); 
      $previousToLast = null;
      $lastNode = null;
      
      if($this->head->data == $key) 
        $lastNode = $this->head;
      
      $temp = $this->head;
      while($temp->next != null) {
        if($temp->next->data == $key) {
          $previousToLast = $temp;
          $lastNode = $temp->next;
        }
        $temp = $temp->next;
      }
   
      if($lastNode != null) {
        if($lastNode == $this->head) {
          $this->head = $this->head->next;
          $lastNode = null;
        } else {
          $previousToLast->next = $lastNode->next;
          $lastNode = null;
        }
      }
    }
  }       


}

// test the code
$MyList = new LinkedList();

//Add three elements at the end of the list.
$MyList->push_back(10);
$MyList->push_back(20);
$MyList->push_back(30);
$MyList->push_back(20);
$MyList->PrintList();


//Delete first occurrence of 20
$MyList->pop_first(20);


//search for element in the list
$MyList->SearchElement(10);
$MyList->SearchElement(15);
$MyList->SearchElement(20);

//Delete last occurrence of 20
$MyList->pop_last(20);

//delete even nodes of the list
$MyList->deleteEvenNodes();

//delete odd nodes of the list
$MyList->deleteOddNodes();

$MyList->PrintList();

//Delete an element at position 2
$MyList->pop_at(1);
$MyList->PrintList();


//number of nodes in the list
echo "No. of nodes: ".$MyList->countNodes();

//Delete an element at position 1
$MyList->pop_at(0);

//number of nodes in the list
echo "No. of nodes: ".$MyList->countNodes();

//delete all nodes of the list
$MyList->deleteAllNodes();

$MyList->PrintList();    
?>
