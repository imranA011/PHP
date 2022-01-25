<?php

session_start();
include 'header.php';
include "classes/Question.php";

$question = new Question();


$q_id = $_GET['qid'];

if (!isset($q_id)) {

    echo "Invalid question";
}

$questionData = $question->getOneQuestion($q_id);
$questionData = $questionData[0];


?>

<body id="page-top">

    <?php include 'navbar.php'; ?>


    <!-- Question Dtails-->
    <section class="page-section portfolio py-0 py-5" id="portfolio">
        <div class="container ">

            <!-- Questions-->
            <div class="row py-2 d-flex align-items-center ">
                <div class="col-md-8">
                    <div id="title">
                        <h6>Q-Title: <span class="text-primary"><?= $questionData['title']; ?></span></h6>
                    </div>
                    <div id="details">
                        <p><span class="h6">Question:</span> <?= $questionData['details']; ?></p>
                    </div>
                </div>
            </div>

            <!-- Answer Render Section-->
            
            <?php 
            
                $getAnswers = $question->getOneQuesAnswer($questionData['id']);
                
            ?>

            <?php foreach($getAnswers as $answer): ?>
            <hr>
            <div class="row border-botttom py-3">
                <div class="col-10">
                    <ul>
                        <li> <?= $answer['details']; ?></li>
                    </ul>
                   
                </div>
                <div class="col-2">
                    <h5><a class="text-primary" href=""><?= $answer['name']; ?></a></h5>
                </div>
            </div>
            <?php endforeach; ?>

        <!-- Answer Submit Section-->
        <?php if(isset($_SESSION['user_id'])) :  ?>
            <hr>
            <div class="row py-2 ">
                <div class="col-12">

            <?php 
                if(isset($_POST['Submit_answer'])){
                    if(!empty($_POST['answer'])){
                        $question->makeAnswer($_POST['answer'], $questionData['id'], $_SESSION['user_id']);
                    }                
                }
            ?>
                    <form action="" method="POST">
                        <div class="control-group">
                            <div class="form-group controls pb-2">
                                <textarea class="form-control" name="answer" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary px-4 py-2 " name="Submit_answer" type="submit" value="Submit Answer">
                        </div>
                    </form>
                </div>
            </div>

        <?php else: ?>
            <hr>
            <div class="row py-2">
                <div class="col-12">
                    <p><a class="text-primary h6" href="login.php">Login</a> to post a answer!</p>
                </div>
            </div>
        <?php endif; ?>

        </div>
    </section>


    <?php include 'footer.php'; ?>