<?php



abstract class Car{
    public $color;
    public $name = "Audi";
    private $newName ="X-Corolla";

//constractor method-1 => value from property
    // public function __construct()
    // {
    //    echo "i am from $this->newName constructor<br>";
    //    echo "i am from $this->name constructor";

    // }
//constractor method-2 => value from prameter
    // public function __construct($carnane)
    // {
    //    echo "i am from $carnane constructor<br>";
    // }

 //general  method
    public function carColor(){
        return $this->color;
    }
    public function carName(){
        return $this->name;
    }
    

//using parameters
    public function colorByParameter($carcolor){
        return $this->color=$carcolor;
    }
    public function nameByParameter($carname){
        return $this->name=$carname;
    } 
    
    
//using getter/setter method
    public function setNewName(){
        echo "setting new name here....";
        $this->newName='BMW'; 
    }
    public function getNewName(){
        return $this->newName;
    }
    
//abstract method
    abstract public function carEngine();



}







?>