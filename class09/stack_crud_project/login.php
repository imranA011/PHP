
<?php 

    include 'header.php';
    include "classes/User.php";

    $user = new User();


?>

<body id="page-top">

<?php include 'navbar.php';?>

        <!-- Login Section-->
        <section class="page-section py-0" id="contact">
            <div class="container">
                <!-- Login Heading-->
                <h2 class="text-center text-uppercase text-secondary py-5">Login</h2>
                
                <!-- login Form-->
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
<?php 

if (isset($_POST['login'])){

    $result = $user->login($_POST['email'],$_POST['password']);



    if(count($result) == 1){

        session_start();
        $_SESSION['user_id'] =  $result[0]['id'];
        $_SESSION['user_name'] =  $result[0]['name'];
        header("location: dashboard.php");

    }else{
        echo "<p class='alert alert-danger'>Invalid Credentials</p>";
    }
   
}

?>

                        <form class="p-4 shadow bg-secondary" action="" method="POST">
                            
                            <div class="control-group">
                                <div class="form-group controls pb-1">
                                    <label class=" text-light">Email</label>
                                    <input class="form-control controls" name="email" type="email"  required="required" data-validation-required-message="Please enter your email." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group controls pb-2">
                                    <label class="text-light">Password</label>
                                    <input class="form-control" name="password" type="password"  required="required" data-validation-required-message="Please enter your password." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
 
                            <div id="success"></div>
                            <div class="form-group">
                                <input class="btn btn-primary px-4 py-2 mt-4 mx-auto d-block" name="login" type="submit" value="Log in">
                            </div>
                            <div>
                                <p class=" pt-4 text-light">Not a member?<a href="http://localhost/ctg403/class08/stack-overflow_crud_project/register.php"> Register</a></p>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>



  