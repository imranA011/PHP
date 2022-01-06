<?php



$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "product_crud_app";


// procedural MYSQLI connection

// $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// if (!$conn) {
//     die ("Database Connection Error");
// }


//object MYSQLI connection

$conn = new mysqli($db_host, $db_user , $db_pass, $db_name);

if ($conn->connect_error) {
  die ("Connection failed: " . $conn->connect_error);
}



//object PDO connection

// try{
//     $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
   
// }catch(PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
//   }




?>