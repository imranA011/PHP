<?php



include "superpower.php";
include "captainamerica.php";
include "thor.php";


class IronMan extends Superpower{ 
    use CaptainAmerica, Thor;    

    public function powerOfIronMan(){
        return "this is from IronMan";
    }
}




?>


