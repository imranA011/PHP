<?php

include 'db_connect.php';

if (isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM products WHERE id= $id";
    $result = mysqli_query($conn, $sql);
    if ($result){
        header("Location: display_product.php");
    }
}





?>