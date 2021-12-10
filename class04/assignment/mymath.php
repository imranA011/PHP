<?php

include "calculator.php";


class MyMath implements Calculator{
    public function sum($num1, $num2){
        return "sum = " .($num1+$num2);
    }
    public function substract($num1, $num2){
        return "subtraction = " .($num1-$num2);
    }
    public function multiply($num1, $num2){
        return "multiplication = " .$num1*$num2;
    }
    public function divide($num1, $num2){
        return "Dividation= " .$num1/$num2;
    }
}












?>