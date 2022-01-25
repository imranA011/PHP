

<?php 

    include 'header.php';
    include "classes/User.php";

    $user = new User();


    if (isset($_POST['register'])){

        $user->register($_POST['name'],$_POST['email'],$_POST['password']);

       
    }


?>

<body id="page-top">

<?php include 'navbar.php';?>

<!-- Form Registration-->

        <section class="page-section py-0" id="contact">
            <div class="container">
                <!-- Registration Heading-->
                <h2 class="text-center text-uppercase text-secondary py-5">Registration</h2>
                
                <!-- Registration Form-->
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                        <form class="p-4 shadow bg-secondary" method="POST">
                            <div class="control-group">
                                <div class="form-group controls pb-1">
                                    <label class=" text-light">Name</label>
                                    <input class="form-control controls" name="name" type="text"  required="required" data-validation-required-message="Please enter your name." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group controls pb-1">
                                    <label class=" text-light">Email</label>
                                    <input class="form-control controls" name="email" type="email"  required="required" data-validation-required-message="Please enter your email." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group controls pb-1">
                                    <label class="text-light">Password</label>
                                    <input class="form-control" name="password" type="password"  required="required" data-validation-required-message="Please enter your password." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
 
                            <?php                            
                                if(isset($_POST['register'])){
                                    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])){
                                        echo "<h4 class='text-success'>Registration Successfully Done</h4>"; 
                                    }                               
                                }                                                       
                            ?> 

                            <div class="form-group">
                                <input class="btn btn-primary px-4 py-2 mt-4 mx-auto d-block" name="register" type="submit" value="Registration">
                            </div>
                            <div>
                                <p class=" pt-4 text-light">Already Registred?<a href="http://localhost/ctg403/class08/stack-overflow_crud_project/login.php"> Login</a></p>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>

  