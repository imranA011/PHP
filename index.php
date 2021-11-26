
<?php 

// $name = "this is Imran";
// $num = 100.00;
// $boo = true;
// $city = array('dhaka', 20, true, 'sylhet', 'khulna', [10, 20]);

// var_dump($name);
// echo "</br>";

// var_dump($num);
// echo "</br>";

// var_dump($boo);
// echo "</br>";

// var_dump($city);
// echo "</br>";

// echo $city[5][1];


/*
Dear CODERS,
Your Class 2 Tasks: (Bring code on next class)
Get two variables with your first name and last name. Print them together in one string.
*/
echo "</br>";

$first_name = "Imran";
$last_name = "Hasan";
$name = $first_name." ".$last_name;
echo $name; //printing name as string with space after word.
echo "</br>";

/*
Take "Welcome to CodersTrust" as a string. Remove "to" & "CodersTrust" from the string. Add your name After "Welcome" and print it
*/
echo "</br>";

$greet = "Welcome To CoderTrust";
echo str_replace('To CoderTrust', 'Imran', $greet);

echo "</br>";
/*
Take your Full name with Space. Replace spaces with comma.
*/
echo "</br>";

$myName = "Imran Hasan";
echo str_replace(' ', ',', $myName);


echo "</br>";

/*
Find Max number between 3 numbers
*/
echo "</br>";

$num1 = 10;
$num2 = 20;
$num3 = 30;

if(($num1 > $num2) && ($num1 > $num3)){
    echo "Max no is :" . $num1;
}elseif((($num2 > $num1) && ($num2 > $num3))){
    echo "Max no is :" . $num2;
}else {
    echo "Max no is :" . $num3;
}

echo "</br>";

$num = array(10, 20, 30);
echo "Max no is :" .max($num) . " (using php max functiom)";

echo "</br>";



/*
Find even or odd from a number
*/
echo "</br>";

$num = 11;
if($num % 2 == 0){
    echo $num." is Even no";
}else{
    echo $num." is Odd no";
}

echo "</br>";
/*
take 3 names of your friends, find the shortest name , if the name's length is odd, print the name with "you are different", if even print name with "you are general".
*/
echo "</br>";

$name = array("Jhony", "Jhon", "Lee");


if(strlen($name[0]) < strlen($name[1]) && strlen($name[0]) < strlen($name[2])){
    if(strlen($name[0]) % 2 == 1){
       echo $name[0] . ", you are different";
    }else{
        echo $name[0] . ", you are general";
    }
}elseif(strlen($name[1]) < strlen($name[0]) && strlen($name[1]) < strlen($name[2])){
    if(strlen($name[1]) % 2 == 1){
        echo $name[1] . ", you are different";
     }else{
         echo $name[1] . ", you are general";
     }
}else{
    if(strlen($name[2]) % 2 == 1){
        echo $name[2] . ", you are different";
     }else{
         echo $name[2]. ", you are general";
     }
}

echo "</br>";


/*
Make 3 functions with 2 parameters each. Pass two numbers and print out SUM, MULTIPLICATION, SUBTRACTION by 3 separate functions.
*/
echo "</br>";

function sum($num1, $num2){
    $sum= $num1+$num2;
    echo "Sum: " .$sum;
}
function multiply($num1, $num2){
    $multiply = $num1*$num2;
    echo "Multiplication: " .$multiply;
}
function subtract($num1, $num2){
    $subtract= $num1-$num2;
    echo "Subtraction: " .$subtract;
}
sum(10, 5);
echo "</br>";
multiply(5, 4);
echo "</br>";
subtract(20, 10);

echo "</br>";


/*
Make a function that will take parameter a number and print out if it is even or odd
*/
echo "</br>";

function oddEvenCheck($num){
   if($num % 2 == 0){
        echo "The Even Number is ".$num;
   }else if($num % 2 == 1){
        echo "The Odd Number is ".$num;
   }else{
        echo "Neither Odd nor Even : ".$num;
   }
}
oddEvenCheck(0);






































?>


