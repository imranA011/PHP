<?php

Class StdCrudApp{

    private $conn;
    
    public function __construct(){       
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname= "student_crud_app";

        $this->conn = mysqli_connect($servername, $username, $password, $dbname);

        if(!$this->conn){
            die ("Database Connection Error");
        }
    }

    public function addData($data){
        $roll = $data['roll'];
        $name = $data['name'];
        $email = $data['email'];

        $sql = "INSERT INTO students_info (roll, name, email) VALUES ($roll, '$name', '$email')";
        $result = mysqli_query($this->conn, $sql);
        if ($result){
          return "Info Added Successfully";
     }
        
    }

    public function displayData(){
        $sql = "SELECT * FROM students_info";
        if (mysqli_query($this->conn, $sql)){
            $rtnData = mysqli_query($this->conn, $sql); 
            return $rtnData;
       }
    }

    public function displayDataById($id){
        $sql = "SELECT * FROM students_info WHERE id = $id";
        if (mysqli_query($this->conn, $sql)){
            $rtnData = mysqli_query($this->conn, $sql); 
            $stdData = mysqli_fetch_assoc($rtnData);
            return $stdData;
       }
    }

    public function updateData($data){
        $nRoll = $data['u_roll'];
        $nName = $data['u_name'];
        $nEmail = $data['u_email'];
        $nId = $data['u_id'];
        
        $sql = "UPDATE students_info SET roll=$nRoll, name='$nName', email='$nEmail' WHERE id = $nId";
        if (mysqli_query($this->conn, $sql)){ 
            header("Location: index.php");
            return "Information Updated Successfully";           
       }     
    }

    public function deleteData($id){
        $sql = "DELETE FROM students_info WHERE id = $id";
        if (mysqli_query($this->conn, $sql)){ 
            return "Information Deleted";           
       } 
    }

}
    

   


?>