<?php
 class Cricle {
  public $radius;
  public $name;
  public function __construct($name,$radius)
  {
    $this->name = $name;  
    $this->radius = $radius;
  }
  public function getradius(){
      return $this->radius;
  }
  public function setradius($radius){
      $this->radius = $radius;
  }
  public function getname(){
      return $this->name;
  }
  public function setname($name){
      $this->name = $name;
  }
}


?>