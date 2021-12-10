<?php



// Task 07: Make a class named "Car". Take EngineStatus,BodyPart property and a method named EngineStart for Car class. Now get Index.php to make object of that class and print out all the properties and methods.

class Car{
    public $EngineStatus, $BodyPart;
    public function EngineStart($a){
        return $a;
    }
}

$corolla = new Car();
echo $corolla->EngineStatus = 'This is Engine Status'.'</br>';
echo $corolla->BodyPart='This is Body Part'.'</br>';
echo $corolla->EngineStart('This is Engine Start').'</br>';






?>