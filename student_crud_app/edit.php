<?php

include "classes/Student.php";

$student = new Student();

//GET DATA FROM URL
if (isset($_GET['status'])) {
    if ($_GET['status'] = 'edit') {
        $edit_id = $_GET['id'];
        $editData = $student->displaySingleUser($edit_id);
        $showId = $editData[0]['s_id'];               
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

    <h2 href='index.php' class="bg-primary text-center py-2"><a class="text-light text-decoration-none" href="index.php">Student Profile</a></h2>
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto shadow">
            <div class="card shadow">
                    <div class="card-header">
                        <h4 class="card-title text-center text-primary p-1">Update Student Information</h4>
                    </div>

                <?php

                    //GET UPDATED DATA
                if (isset($_POST['update'])) {
                    $u_name = $_POST['name'];
                    $u_email = $_POST['email'];
                    if(isset($_POST['gender'])){
                        $u_gender = $_POST['gender'];
                    }                   
                    $u_age = $_POST['age'];
                    $u_phone = $_POST['phone'];                  
                    $u_location = $_POST['location'];
                    $u_photo = $_FILES['new_photo'];  
                                      

                    // FORM VALIDATION
                if (empty($u_name) || empty($u_email) || empty($u_phone) || empty($u_age) || empty($u_gender) || empty($u_location)){
                    $msg = '<div class="alert alert-warning alert-dismissible text-danger">
                        <strong>All fields are required.</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>';
                } elseif (!filter_var($u_email, FILTER_VALIDATE_EMAIL)) {
                    $msg = '<div class="alert alert-warning alert-dismissible text-danger">
                        <strong>Enter valid email address.</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>';
                } elseif ($u_age < 18) {
                    $msg = '<div class="alert alert-warning alert-dismissible text-danger">
                        <strong>You are not old enough to enter this app.</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>';                
                } else {
                    if(empty($u_photo['name'])){
                          $new_photo_name = $_POST['old_photo'];                                                      
                    }else{
                        $std_u_data = $student->uploadFile($u_photo, 'assets/img/');
                        $new_photo_name = $std_u_data['file_name']; 
                        unlink("assets/img/". $_POST['old_photo']);                         
                    } 
                    
                    $student->updateUser($showId, $u_name, $u_email, $u_gender, $u_age, $u_phone, $u_location, $new_photo_name); 
                    $msg = '<div class="alert alert-warning alert-dismissible text-primary">
                        <strong>Information Updated Successfully.</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>';
                         
                } 
                }

                ?>

                <form action="" method="POST" enctype="multipart/form-data" id="addform">

                    <?php if (isset($msg)) {echo $msg;} ?>

                    <div class="card-body">
                        <div class="mb-3">
                            <span><i class="fas fa-user-alt text-primary"></i></span>
                            <label for="userInputName" class="form-label">Name</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="name" value="<?= $editData[0]['s_name']; ?>">
                            </div>
                        </div>
                        <div class="mb-3">
                            <span><i class="fas fa-envelope-open text-primary"></i></span>
                            <label for="userInputEmail" class="form-label">Email</label>
                            <div class="input-group">
                                <input type="email" class="form-control" name="email" value="<?= $editData[0]['s_email']; ?>">
                            </div>
                        </div>
                        <div class="mb-3">
                            <span><i class="fas fa-mars text-primary"></i></span>
                            <label for="userInputGender" class="form-label">Gender</label>
                            <div class="">
                                <input type="radio" id="male" name="gender" value="male"
                                <?php if ($editData[0]['s_gender'] == 'male'){echo 'checked';}?> >
                                <label for="male">&nbsp;Male</label>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" id="female" name="gender" value="female"
                                <?php if ($editData[0]['s_gender'] == 'female') {echo 'checked';} ?> >
                                <label for="female">&nbsp;Female</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <span><i class="fas fa-calendar-alt text-primary"></i></span>
                            <label for="userInputAge" class="form-label">Age</label>
                            <div class="input-group">
                                <input type="number" class="form-control" name="age" value="<?= $editData[0]['s_age']; ?>">
                            </div>
                        </div>
                        <div class="mb-3">
                            <span><i class="fas fa-phone text-primary"></i></span>
                            <label for="userInputPhone" class="form-label">Phone No.</label>
                            <div class="input-group">
                                <input type="tel" class="form-control" name="phone" value="<?= $editData[0]['s_phone']; ?>">
                            </div>
                        </div>                        
                        <div class="mb-3">
                            <span><i class="fas fa-location text-primary"></i></span>
                            <label for="userInputlocation" class="form-label">Location</label>
                            <div class="input-group">
                                <select class="form-select" name="location" id="">
                                    <option value="">Select Location</option>
                                    <option <?php if ($editData[0]['s_location'] == 'Dhaka') {
                                                echo 'selected';
                                            } ?> value="Dhaka">Dhaka</option>
                                    <option <?php if ($editData[0]['s_location'] == 'Khulna') {
                                                echo 'selected';
                                            } ?> value="Khulna">Khulna</option>
                                    <option <?php if ($editData[0]['s_location'] == 'Chottogram') {
                                                echo 'selected';
                                            } ?> value="Chottogram">Chottogram</option>
                                    <option <?php if ($editData[0]['s_location'] == 'Sylhet') {
                                                echo 'selected';
                                            } ?> value="Sylhet">Sylhet</option>
                                    <option <?php if ($editData[0]['s_location'] == 'Rangpur') {
                                                echo 'selected';
                                            } ?> value="Rangpur">Rangpur</option>
                                    <option <?php if ($editData[0]['s_location'] == 'Rajsahi') {
                                                echo 'selected';
                                            } ?> value="Rajsahi">Rajsahi</option>
                                    <option <?php if ($editData[0]['s_location'] == 'Barisal') {
                                                echo 'selected';
                                            } ?> value="Barisal">Barisal</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="userInputPhoto" class="form-label">Change Photo</label>
                            <div>                           
                                <img class="img-thumbnail" style="width:150px; height:100px"
                                src="assets/img/<?= $editData[0]['s_photo']; ?>" alt="photo">
                                <input type="hidden" name="old_photo" value="<?= $editData[0]['s_photo'];?>">
                            </div>
                            <div class="input-group">
                                <input type="file" class="form-control" name="new_photo" id="userInputPhoto">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-grid">
                        <input type="submit" class="btn btn-primary" name="update" value="Update">
                    </div>
                </form>
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
