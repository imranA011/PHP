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
    </style>
</head>
<body>

    <div class="form">
        <h1>Task 04</h1>
        <form action="action.php" method="post">         
            <input type="text" name="username" placeholder="username">
            <input type="password" name="password" placeholder="password">       
            <input type="submit" name="submit" value="Submit">
        </form>         
    </div>
 
</body>
</html>
