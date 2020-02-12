<?php
 include_once("./class-Circle.php");
 include_once("./class-Comparator.php");
 class CircleComparator extends Cricle implements Comparator {
    public function __construct($name,$radius)
    {
        parent::__construct($name,$radius);
    }
    public function compare($circleOther){
        $circleOtherRadius = $circleOther->getradius();

        if ($this->getradius() > $circleOtherRadius) {
            return 1;
        }  else if($this->getradius() < $circleOtherRadius) {
            return -1;
        } else {
            return 0;
        }   
    }
 }
?>