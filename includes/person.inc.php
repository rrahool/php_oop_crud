<?php

class Person {
    protected $first = "Rahul";
    private $last = "Biswas";

    
}

class Pet extends Person{
    public function owner() {
        $a = $this->first;
        return $a;
    }
}