<?php

include "classes/Student.php";

$student = new Student();

//GET DATA FROM URL

if(isset($_GET['status'])){
    if ($_GET['status']='view'){
         $view_id = $_GET['id'];
         $viewData = $student->displaySingleUser($view_id);  

    }  
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Profile - Crud App</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>

<h2 href= 'index.php' class="bg-primary text-center py-2"><a class="text-light text-decoration-none" href="index.php">Student Profile</a></h2>
    <div class="container">
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <h4 class="text-center text-primary py-4">Single Student Information</h4>
                <table class="table table-striped table-bordered mt-2 shadow">
                        <tr class="align-middle text-center"> 
                            <td colspan="2"><img class="img-thumbnail" style="width:300px; height:200px" src="assets/img/<?= $viewData[0]['s_photo']; ?>" alt=""></td>
                        </tr> 
                        <tr>
                            <td>Name</td>
                            <td><?=$viewData[0]['s_name'];?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?=$viewData[0]['s_email'];?></td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td><?=$viewData[0]['s_gender'];?></td>
                        </tr>
                        <tr>
                            <td>Age</td>
                            <td><?=$viewData[0]['s_age'];?></td>
                        </tr>                        
                        <tr>
                            <td>Phone No</td>
                            <td><?=$viewData[0]['s_phone'];?></td>
                        </tr>
                        <tr>
                            <td>Location</td>
                            <td><?=$viewData[0]['s_location'];?></td>
                        </tr>                       
                        
                </table>
            </div>
        </div>
    </div>



    <!-- JQuery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>





</body>

</html>