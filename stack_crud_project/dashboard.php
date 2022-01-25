

<?php 

    session_start();
    include 'header.php';
    include "classes/User.php";

    $user = new User();

    if(!isset($_SESSION['user_id'])){
        
        header("location: login.php");

    }

?>

<body id="page-top">

<?php include 'navbar.php';?>
            

 <!-- Dashboard Section-->
 <section class="page-section portfolio py-0" id="portfolio">
            <div class="container ">
                <!-- Portfolio Section Heading-->
                <h1 class=" text-center text-uppercase text-secondary mb-0 py-5">User Profile</h1>               
                <!-- Portfolio Grid Items-->
                <div class="container-fluid d-flex align-items-center justify-content-center py-5">
                <div class="row w-50">

                    <!-- Portfolio Item 1-->
                    <div class="col-md-12 mb-4 py-3 bg-primary  ">
                        <h4 class="text-center d-flex align-items-center justify-content-center h-100 w-100 ">
                            <a class="text-dark text-capitalize text-decoration-none align-middle" href="questions-view.php">All Question</a>
                        </h4>                        
                    </div>

                    <!-- Portfolio Item 2-->
                    <div class="col-md-12 mb-4 py-3 bg-primary  ">
                        <h4 class="text-center d-flex align-items-center justify-content-center h-100 w-100 ">
                            <a class="text-dark text-capitalize text-decoration-none align-middle" href="create-question.php">create a new question</a>
                        </h4>                        
                    </div>
                              

                    </div>
                    <div class="row w-50">
                    <div class="col-md-8 offset-md-4 ">
                        <img class="img-fluid w-100 h-100 " src="assets/img/avataaars.svg" alt="">
                    </div>
                    </div>
                
                </div>
                
            </div>
        </section>
       
       
<?php include 'footer.php';?>  