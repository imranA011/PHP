<!-- 2.Take a form with 3 input fields, they are named, first_name, last_name, age, gender. Use POST method , then when submit the form it will show all the input fields data -->

<?php

if(isset($_POST["submit"])){
    $fname = $_POST["firstname"]; 
    $lname = $_POST["lastname"]; 
    $age = $_POST["age"];
    $gender = $_POST["gender"];
} 
 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment on Form</title>
    <style>
        * {box-sizing: border-box}
        .form{max-width: 700px; background: #ccc; margin: 0 auto; padding: 1rem;}
        .output{background: #ffee66; }
        h1{text-align: center; margin-bottom: 2rem;} 
        h2{margin: 5px 0;}     
        input[type="text"],
        input[type="number"],
        input[type="password"],
        input[type="checkbox"],
        input[type="submit"]{width: 100%; margin-bottom: 10px; padding: 10px 15px;}
        input[type="radio"]{ margin-bottom: 10px; padding: 10px 15px;}
        ::placeholder{text-transform: capitalize;}
    </style>
</head>
<body>

      <div class="form">
        <h1>Task 02</h1>
        <form action="id-form.php" method="post">         
            <input type="text" name="firstname"placeholder="Your First Name">
            <input type="text" name="lastname"placeholder="Your Last Name">
            <input type="number" name="age"placeholder="Your Age">
            <input type="radio" name="gender" value="Male" id="male">
            <label for="male">Male</label><br>
            <input type="radio" name="gender" value="Female"id="female">
            <label for="female">Female</label><br> 
            <input type="radio" name="gender" value="Other"id="other">
            <label for="other">Other</label> <br>
            <input type="submit" name="submit" value="Submit">
        </form>
        <hr>
        <div class="output">
        <h2>First Name: 
            <?php                             
                if(isset($fname))
                {
                    echo $fname;
                } 
            ?>
        </h2>
        <h2>last Name: 
            <?php                            
                if(isset($lname))
                {
                    echo $lname;
                } 
            ?>
        </h2>
        <h2>Age: 
            <?php                           
                if(isset($age))
                {
                    echo $age;
                } 
            ?>
        </h2>
        <h2>Gender: 
            <?php                             
                if(isset($gender))
                { 
                    echo $gender;
                } 
            ?>
        </h2>
    </div>

    
</body>
</html>