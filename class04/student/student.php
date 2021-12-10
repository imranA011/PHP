<?php 





abstract class Student{
   
    public function course($course_name){
        return "the name of the course is". $course_name;
    }
    public function getMarks($marks){
        return "total marks is". $marks;
    }
    abstract public function std_roll($roll);
}




























?>




