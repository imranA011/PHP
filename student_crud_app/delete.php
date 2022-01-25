<?php

    include "classes/Student.php";

    $student = new Student();

    //GET DATA FROM URL
    if (isset($_GET['status'])) {
        if ($_GET['status'] = 'delete') {
            $dlt_id = $_GET['id'];
            $deleteMsg = $student->deleteUser($dlt_id);           
        }
    }
        
    header ("location:index.php"); 




?>