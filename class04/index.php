
<?php 



// include "car.php";
// include "car/audi.php";
// include "student/web.php";

include "assignment/registration.php";
include "assignment/main.php";
include "assignment/ironman.php";
include "assignment/laptop.php";
include "assignment/mystatus.php";
include "assignment/myname.php";
include "assignment/assignment.php";
include "assignment/mymath.php";


//task-1
$name = new Registration("Imran", "Hasan");
echo "<br>";
echo "<br>";


//task-2
$k10 = new Main;
echo $k10->setKeyValue("new value");
echo $k10->getKeyValue();
echo "<br>";
echo "<br>";


//task-3
$power = new IronMan;
echo $power->flying(); //parent class
echo "<br>";
echo $power->LaserEye(); //parent class
echo "<br>";
echo $power->powerOfIronman(); //child class
echo "<br>";
echo $power->powerOfCaptainAmerica(); //sbiglings
echo "<br>";
echo $power->powerOfThor(); //sbiglings
echo "<br>";
echo "<br>";
//task-4
$del = new Laptop;
echo $del->processPower();
echo "<br>";
echo $del->motherBoard();
echo "<br>";
echo $del->powerSupply();
echo "<br>";
echo "<br>";

//task-5
$showStatus = new MyStatus;
echo $showStatus->lowMoney();
echo "<br>";
echo $showStatus->homeLess();
echo "<br>";
echo "<br>";

//task-6
$showName = new MyName("Imran");
echo "<br>";
echo "<br>";

//task-7
$task7 = new Assignment();
echo "<br>";
$task7->countWord();
echo "<br>";
$task7->replaceWord();
echo "<br>";
echo "<br>";


//task-8
$mathCalc = new MyMath;
echo $mathCalc->sum(10, 5);
echo "<br>";
echo $mathCalc->substract(10, 5);
echo "<br>";
echo $mathCalc->multiply(10, 5);
echo "<br>";
echo $mathCalc->divide(10, 5);


















// $php = new Web();

// echo $php->std_roll(25);
// echo "</br>";
// echo $php->getMarks(100);
// echo "</br>";
// echo $php->course(" web development");
// echo "</br>";
// echo $php->totalCourse(10);
// echo "</br>";
// echo $php->totalStudents(500);
// echo "</br>";
// echo $php->ourMentor("Sams");
// echo "</br>";




echo "</br>";
echo "</br>";
echo "</br>";
// object from audi class
// $a100 = new Audi;
// echo $a100->sportsCar();
// echo "</br>";
// echo $a100->carName();
// echo "</br>";
// echo $a100->getNewName();
// echo "</br>";
// $a100->carEngine();
// echo "</br>";
// $a100->engine();
// echo "</br>";
// $a100->bmwCall();





echo "</br>";
echo "</br>";
echo "</br>";

//object of car class
// $c30 = new Car('Marcidis'); //from constructor
// $A30 = new Car;
// echo $A30->color="red"; //assigning value
// echo "</br>";
// echo $A30->name; //calling property
// echo "</br>";
// echo $A30->carColor(); // method calling
// echo "</br>";
// echo $A30->carName(); // method calling
// echo "</br>";
// echo "<br>";
// echo $A30->colorByParameter('blue'); // method calling 
// echo "</br>";
// echo $A30->nameByParameter('toyota'); // method calling 
// echo "</br>";
// echo "<br>";
// echo $A30->getNewName(); // method calling 
// echo "</br>";
// echo $A30->setNewName(); // method calling 
// echo "</br>";
// echo $A30->getNewName(); // method calling 



?>


