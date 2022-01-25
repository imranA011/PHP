<?php 

    session_start();

    include "classes/Question.php";

    $question = new Question();

    if(!isset($_GET['qid'])){
        echo "Invalid";
    }

    $question->deleteQuestion($_GET['qid']);


    header("location: questions-view.php");



?>