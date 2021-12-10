<?php


include "car.php";
include "vehicle.php";
include "bmw.php";


class Audi extends Car implements Vehicle{
    use bmwCar;

    public function sportsCar(){
        return 'Audi is a sports car';
    }
    public function carEngine(){
        echo 'this is engine from Car';
    }
    public function engine(){
        echo 'this is engine from vehicle';
    }
    public function chasis(){}
    public function wheel(){}
    

}



?>