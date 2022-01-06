<!-- Make a registration form with fields username,password,email,phone,address . Validate the form with
i) username must be at least 6 character
ii) password at least 8 length
iii) username and password must be filled up
iv) phone number must be numeric -->


<?php

if(isset($_POST["submit"])){
    if(strlen($_POST["username"]) > 6){
        $username = $_POST["username"];
    }else{
        $userReq = "Username must be at least 6 character";
    }
    if(strlen($_POST["password"]) > 8){
        $password = $_POST["password"]; 
    }else{
        $passReq = "Password must be at least 8 length";
    }
    
    $email = $_POST["email"];


    $phone = $_POST["phone"]; 
    $comment = $_POST["comment"]; 
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
        input[type="email"],
        input[type="tel"],
        input[type="checkbox"],
        textarea,
        input[type="submit"]{width: 100%; margin-bottom: 10px; padding: 10px 15px;}
        input[type="radio"]{ margin-bottom: 10px; padding: 10px 15px;}
        ::placeholder{text-transform: capitalize;}
        .error{text-align: center; margin-bottom: 2rem; } 
    </style>
</head>
<body>

    <div class="form">
        <h1>Task 03</h1>
        <form action="registration-form.php" method="post">         
            <input type="text" name="username" placeholder="username">
            <span class="error"><?php if(isset($userReq)){echo $userReq;}?></span>          
            <input type="password" name="password" placeholder="password">
            <span class="error"><?php if(isset($passReq)){echo $passReq;}?></span>
            <input type="email" name="email" placeholder="email">
            <input type="tel" name="phone" placeholder="Contact number">
            <textarea name="comment" rows="5"></textarea>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div> 
        <hr>
    <div class="output">
        <h2>Username: 
            <?php                           
                if(isset($username))
                {                   
                    echo $username;
                } 
            ?>
        </h2>
        <h2>Password: 
            <?php                            
                if(isset($password))
                {
                    echo $password;
                } 
            ?>
        </h2>
        <h2>E-mail: 
            <?php                          
                if(isset($email))
                {                  
                    echo $email;
                } 
            ?>
        </h2>
        <h2>Contact Number: 
            <?php                            
                if(isset($phone))
                {
                    echo $phone;
                } 
            ?>
        </h2>
        <h2>Address:  
            <?php                             
                if(isset($comment))
                { 
                    echo $comment;
                } 
            ?>
        </h2>
    </div>
    
         

    
</body>
</html>