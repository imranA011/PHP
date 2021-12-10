<?php



//2.take a CLASS and a private variable named "$key", now set the $key value by passing setter method and print it via getter method.

class Main {

    private $key;

    public function setKeyValue($val){
        $this->key=$val;
    }
    public function getKeyValue(){
        return $this->key;
    }
}












?>