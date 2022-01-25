<?php 

include 'Database.php';

class Question extends Database{


    //MAKE NEW QUESTION
    public function addQuestion($title, $details, $user_id)
    {   
        $query = "INSERT iNTO questions (title, details, user_id) VALUES ('$title', '$details', $user_id)";

        $this->insertData($query);
    }

    //FETCH ALL QUESTIONS
    public function getAllQuestions()
    {   
        $query = "SELECT questions.id, questions.title, questions.user_id AS q_user_id, COUNT(answers.question_id) AS answer_count FROM questions LEFT JOIN answers ON questions.id=answers.question_id GROUP BY answers.question_id";
         
        return $this->fetchData($query);
    }

    //FETCH SPECIFIC QUESTION
    public function getOneQuestion($qid)
    {   
        $query = "SELECT * FROM questions WHERE id = $qid";

        return $this->fetchData($query);
    }

     //POST AN ANSWER
     public function makeAnswer($details, $question_id, $user_id)
     {   
         $query = "INSERT iNTO answers (details, question_id, user_id) VALUES ('$details', $question_id, $user_id)";
 
         $this->insertData($query);
     }

     //GET ONE QUESTION ANSWER

     public function getOneQuesAnswer($qid){
         $query = "SELECT * FROM answers join users on users.id = answers.user_id WHERE question_id = '$qid'";

         return $this->fetchData($query);
     }

     //EDIT QUESTION
    public function editQuestion($qid, $title, $details)
    {   
        $query = "UPDATE questions SET title='$title', details='$details' WHERE id='$qid'";

        $this->insertData($query);
    }

    //DELETE QUESTION
    public function deleteQuestion($qid)
    {   
        $query = "DELETE FROM questions WHERE id='$qid'";

        $this->insertData($query);
    }

}




?>