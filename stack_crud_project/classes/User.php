<?php

include "Database.php";

class User extends Database{

    //REGISTER
    public function register($name, $email, $password){

        $password = md5($password);
        $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email','$password')";
        $this->insertData($query);
    }

    //LOGIN
    public function login($email, $password){

        $password = md5($password);
        $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = $this->fetchData($query);
        return $result;
       
    }

}



?>