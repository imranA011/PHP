<?php

if(isset($_POST['submit'])){
    if(empty($_POST['username'])){
        $nameReq = 'name required';
    }else{
        $username = $_POST['username'];
    }
    if(empty($_POST['password'])){
        $passReq = 'password required';
    }elseif(strlen($_POST['password']) < 8){
        $passReq = 'password at least 8 characters long';
    }else{
        $password = $_POST['password'];
    }
    
   


    $email = $_POST['email'];
    $comment = $_POST['comment'];
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
        .error{color:#ff0000}
    </style>
</head>
<body>

    <div class="form">
       
        <form action="test.php" method="post">         
            <input type="text" name="username" placeholder="username">
            <span class="error"><?php if(isset($nameReq)){echo $nameReq;}?></span>
            <input type="password" name="password" placeholder="password">
            <span class="error"><?php if(isset($passReq)){echo $passReq;}?></span>
            <input type="email" name="email" placeholder="email">
            <textarea name="comment" rows="5"></textarea>
            <input type="submit" name="submit" value="Submit">
            <!-- <h1>your message has been sent</h1> -->
        </form>
    </div>   
         

    
</body>
</html>