<?php

session_start();
include 'header.php';
include "classes/Question.php";

$question = new Question();

$result = $question->getAllQuestions();



?>

<body id="page-top">

    <?php include 'navbar.php'; ?>


    <!-- All  Questions-->
    <section class="page-section portfolio py-0 py-5" id="portfolio">
        <div class="container ">

            <?php foreach ($result as $question) : ?>

                <div class="row py-2 d-flex align-items-center border-bottom">
                    <!-- Answers-->
                    <div class="col-md-2 border-right">
                        <div class="text-center">
                            <h2 class="text-primary"><a href="" class="text-decoration-none">
                                    <?= $question['answer_count']; ?>
                                </a></h2>
                            <span>Answer</span>
                        </div>
                    </div>
                    <!-- Questions-->
                    <div class="col-md-8">
                        <h5>
                            <a class="text-dark text-decoration-none" href="question-details.php?qid=<?= $question['id']; ?>"><?= $question['title']; ?></a>
                        </h5>

                    </div>
                    <!-- edit/delete-->
                    <?php if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == $question['q_user_id']) : ?>

                        <div class="col-md-2 py-3">
                            <div class="text-center">
                                <a class="btn btn-warning" href="edit-question.php?qid=<?= $question['id']; ?>">Edit</a>
                                <a class="btn btn-danger" href="delete-question.php?qid=<?= $question['id']; ?>" onclick="return confirm('Are You Sure?')">Delete</a>
                            </div>
                        </div>
                    <?php endif; ?>


                </div>

            <?php endforeach; ?>



        </div>
    </section>


    <?php include 'footer.php'; ?>