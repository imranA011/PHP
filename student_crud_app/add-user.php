<?php

include "classes/Student.php";

$student = new Student();

//GET FORM DATA
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    if (isset($_POST['gender'])) {
        $gender = $_POST['gender'];
    }   
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    if (isset($_FILES['photo'])) {
        $photo = $_FILES['photo'];
    }   
    
    

    //FORM VALIDATION
    if (empty($name) || empty($email) || empty($gender) || empty($age) || empty($phone) || empty($location)){
        $msg = '<div class="alert alert-warning alert-dismissible text-danger">
            <strong>All fields are required.</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $msg = '<div class="alert alert-warning alert-dismissible text-danger">
            <strong>Enter valid email address.</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>';
    } elseif ($age < 18) {
        $msg = '<div class="alert alert-warning alert-dismissible text-danger">
            <strong>You are not old enough.</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>';
    } else {
        $std_data = $student->uploadFile($photo, 'assets/img/');

        if (!empty($std_data['msg'])){
            $msg = $std_data['msg'];           
        }else{
            $student->addUser($name, $email, $gender, $age, $phone, $location, $std_data['file_name']);        
            $msg = '<div class="alert alert-success alert-dismissible text-primary">
            <strong>Information Added Successfully</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>';
        }
            
    } 
        
        //header('location:index.php');          
       
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
    <h2 href='index.php' class="bg-primary text-center py-2"><a class="text-light text-decoration-none" href="index.php">Student Profile</a></h2>
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="card shadow">
                    <div class="card-header">
                        <h4 class="card-title text-center text-primary p-1">New Student Information</h4>
                    </div>

                    <?php 
                    if (isset($msg)){
                        echo $msg;
                    }                  
                    ?>

                    <div class="card-body">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data" id="addform">
                            <div class="mb-3">
                                <span><i class="fas fa-user-alt text-primary"></i></span>
                                <label for="userInputName" class="form-label">Name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
                                </div>
                            </div>
                            <div class="mb-3">
                                <span><i class="fas fa-envelope-open text-primary"></i></span>
                                <label for="userInputEmail" class="form-label">Email</label>
                                <div class="input-group">
                                    <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
                                </div>
                            </div>
                            <div class="mb-3">
                                <span><i class="fas fa-mars text-primary"></i></span>
                                <label for="userInputGender" class="form-label">Gender</label>
                                <div class="">
                                    <input type="radio" id="male" name="gender" value="male"><label for="male">&nbsp;Male</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" id="female" name="gender" value="female"><label for="female">&nbsp;Female</label>
                                </div>
                            </div>                            
                            <div class="mb-3">
                                <span><i class="fas fa-calendar-alt text-primary"></i></span>
                                <label for="userInputAge" class="form-label">Age</label>
                                <div class="input-group">
                                    <input type="number" class="form-control" name="age" placeholder="Enter Your Age">
                                </div>
                            </div>                            
                            <div class="mb-3">
                                <span><i class="fas fa-phone text-primary"></i></span>
                                <label for="userInputPhone" class="form-label">Phone No.</label>
                                <div class="input-group">
                                    <input type="tel" class="form-control" name="phone" placeholder="Enter Your Phone No.">
                                </div>
                            </div>
                            <div class="mb-3">
                                <span><i class="fas fa-location text-primary"></i></span>
                                <label for="userInputlocation" class="form-label">Location</label>
                                <div class="input-group">
                                    <select class="form-select" name="location" id="">
                                        <option value="">Select Location</option>
                                        <option value="Dhaka">Dhaka</option>
                                        <option value="Khulna">Khulna</option>
                                        <option value="Chottogram">Chottogram</option>
                                        <option value="Sylhet">Sylhet</option>
                                        <option value="Rangpur">Rangpur</option>
                                        <option value="Rajsahi">Rajsahi</option>
                                        <option value="Barisal">Barisal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="userInputPhoto" class="form-label">Upload Photo</label>
                                <div class="input-group">
                                    <input type="file" class="form-control" name="photo" id="userInputPhoto">
                                </div>
                            </div>
                            
                    </div>
                    <div class="card-footer text-center d-grid ">
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </div>
                    </form>
                </div>
            </div>
        </div>
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