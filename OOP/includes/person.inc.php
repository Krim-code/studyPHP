<?php

class Person {
    protected $first = "Revy";
    private $last = "Krim";

    private $age = "21";

}

class Pet  extends Person{
    
    public function owner() { 
        $a = $this->first;
        return $a;}
}

?>