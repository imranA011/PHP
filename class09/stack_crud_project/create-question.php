
<?php 

session_start();
include 'header.php';
include "classes/Question.php";

$question = new Question();

if(!isset($_SESSION['user_id'])){
        
    header("location: login.php");

}



?>

<body id="page-top">

<?php include 'navbar.php';?>

<!-- Question Page-->

    <section class="page-section py-0" id="contact">
        <div class="container">

            <!-- Question Heading-->
            <h2 class="text-center text-uppercase text-secondary py-5">Add Your Question</h2>
            
            <!-- Question Form-->
            <div class="row">
                <div class="col-md-10 mx-auto">
 <?php
    
    if (isset($_POST['add_btn'])){
        if (!empty($_POST['title']) && !empty($_POST['details'])){
        
            $question->addQuestion($_POST['title'], $_POST['details'], $_SESSION['user_id']);
        }
    } 
 ?>               
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                    <form class="p-4 shadow bg-secondary" method="POST" action="">
                        <div class="control-group">
                            <div class="form-group controls pb-1">
                                <label class=" text-light h5">Title</label>
                                <input class="form-control controls" required name="title" type="text"/>
                             </div>
                        </div> 
                        <div class="control-group">
                            <div class="form-group controls pb-1">
                                <textarea class="form-control controls" name="details" id="questionData" rows="10"></textarea>
                            </div>
                        </div>                      

                        <div class="form-group">
                            <input class="btn btn-primary px-4 py-2 mt-3" name="add_btn" type="submit" value="Add Question">
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </section>

    <br>
    <br>
    <br>


    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
      tinymce.init({
        selector: '#questionData'
      });
    </script>

    <?php include 'footer.php';?>  