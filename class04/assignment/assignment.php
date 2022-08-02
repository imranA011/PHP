

<?php

//7.Make a class named 'Assignment'. Now take a variable and set "ADVANCED WEB APPLICATION DEVELOPMENT" as the value by constructor. Now make 3 methods where you can do, 1. count number of word of the sentence and return the result, 2. Find the lowest number of word from the sentence and print it, 3. Find the "Application" word from the sentence and replace the word with "WEBSITE" and print the full Sentence again with the replaced word.



class Assignment{

    public $course_name;

    public function __construct(){
        $this->course_name="ADVANCED WEB APPLICATION DEVELOPMENT";
        echo $this->course_name;
    }    
    public function countWord(){
        $result = $this->course_name;      
        echo str_word_count($result);
        // print_r(str_word_count($result, 1)) ;
        // print_r(str_word_count($result, 2)) ;
        
    }
    public function replaceWord(){
        $result = $this->course_name;      
        echo str_replace("APPLICATION", "WEBSITE",  $result);   
    }
    
    public function lowestWord()
    {
        $str = $this->courseName;
        $words = explode(" ", $str);
        $lowestWord = $words[0];
        foreach($words as $word)
        {
            if(strlen($word) < strlen($lowestWord))
            {
                $lowestWord = $word ;
            }
        }
        echo $lowestWord ;
    }
    
}

$obj = new Assignment();
$obj->countWord();
$obj->replaceWord();
$obj->lowestWord();























?>




