<?php  
include_once './classAnimal.php';
include_once './class-edible.php';
 class chicken extends Aminal {
     public function makeSound()
     {
         return "chicken : dau xa";
     }
     public function howtoEat(){
         return "aaaaa";
     }
 }