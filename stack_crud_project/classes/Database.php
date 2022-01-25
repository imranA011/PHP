<?php



class Database{

    public $conn;

    //INIT DATABASE CONNECTION
    public function __construct(){

        $host= "localhost";
        $username= "root";
        $password= "";
        $db_name= "stack_overflow_crud_app";      

        try {
            $connection = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
                $this->conn = $connection;

          } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
          }         
    }

    // SEND DATA
    public function insertData($sql){
        
        $stmt = $this->conn->prepare($sql);
        $stmt -> execute();

    }

    // FETCH DATA
    public function fetchData($sql){
        
        $stmt = $this->conn->prepare($sql);
        $stmt -> execute();
        return $stmt -> fetchAll(PDO::FETCH_ASSOC);

    }

}













?>



