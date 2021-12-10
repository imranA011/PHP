

<?php

include "electronics.php";

class Laptop extends Electronics{
    public function processPower(){
        return "this is process power";
    }
    public function motherBoard(){
        return "this is motherboard";
    }
    public function powerSupply(){
        return "this is power supply";
    }
}






?>