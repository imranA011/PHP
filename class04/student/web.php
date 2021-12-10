<?php


include "student.php";
include "school.php";
include "mentor.php";

class Web extends Student implements School{

    use Mentor;

    public function std_roll($roll){
        return "student roll wd-".$roll;
    }
    public function totalCourse($tc){
        return "total course - ".$tc;
    }
    public function totalStudents($ts){
        return "total student - ".$ts;
    }

    

}




?>