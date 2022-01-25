<?php

    include "Database.php";

    class Student extends Database{

        //UPLOAD FILE SYSTEM METHOD
        public function uploadFile($file, $file_path=''){
            $photo_name = $file['name'];
            $photo_tmp_name = $file['tmp_name'];
            $photo_size = $file['size'];

            //GET FILE EXTENSION
            $photo_arr = explode('.', $photo_name);
            $photo_extension = strtolower(end($photo_arr));           

            //UNIQUE FILE NAME GENARATOR
            // $photo_name = uniqid().'.'.$photo_extension;
            $photo_name = md5(time().rand()).'.'.$photo_extension;

            $file_format = ['png','jpg','gif'];
           
            $msg = '';
            if(empty($file['name'])){
                $msg = '<div class="alert alert-warning alert-dismissible text-danger">
                    <strong>photo required.</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>';
            }else
            if (in_array($photo_extension, $file_format) == false){
                $msg = '<div class="alert alert-warning alert-dismissible text-danger">
                        <strong>Invalid file format.</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert">
                        </button></div>';          
            }elseif ($photo_size >= 1000000) {
                $msg = '<div class="alert alert-warning alert-dismissible text-danger">
                        <strong>Image is too large.</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>';
            }else {
                //FILE MOVE TO FOLDER
                move_uploaded_file($photo_tmp_name, $file_path.$photo_name); 
            }
            return [
                'msg'       => $msg,
                'file_name' => $photo_name
            ];
        }       

        //Add User information
        public function addUser($n, $e, $g, $a, $c, $l, $i){
            $sql= "INSERT INTO students (s_name, s_email, s_gender, s_age, s_phone, s_location, s_photo) VALUES('$n', '$e', '$g', '$a', '$c', '$l', '$i')";           
            $Statement= $this->conn->prepare($sql);
            $Statement->execute();
        }

        //Display All User Information
        public function displayAllUser($search){
            $sql = "SELECT * FROM students WHERE s_name LIKE '%$search%' OR s_gender = '$search' OR s_location = '$search' ";
            $statement= $this->conn->prepare($sql);
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);        
        }

        //Display a specific User Information
        public function displaySingleUser($id){
            $sql = "SELECT * FROM students WHERE s_id='$id'";
            $statement= $this->conn->prepare($sql);
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);  
        }

        //Update User Information
        public function updateUser($id, $n, $e, $g, $a, $c, $l, $i){
            $sql = "UPDATE students SET s_name='$n', s_email='$e', s_gender='$g', s_age='$a', s_phone='$c', s_location='$l', s_photo='$i' WHERE s_id='$id'";
            $statement = $this->conn->prepare($sql);
            $statement->execute(); 
               
        }

        //Delete User Information
        public function deleteUser($id){
            $sql = "DELETE FROM students WHERE s_id='$id'";
            $statement = $this->conn->prepare($sql);
            $statement->execute(); 
                 
        }




    }





?>