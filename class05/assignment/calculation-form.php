<!-- 1.Take a form with two input fields (GET Request). Now when submit the form it will output the sum of the two input fields values. (Addition you can check if the inputs are number or not) -->
<?php                
    if(isset($_GET["submit"])){
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
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
        <h1>Task 01</h1>
        <form action="calculation-form.php" method="GET">         
            <input type="text" name="num1" placeholder="enter number">
            <input type="text" name="num2" placeholder="enter number">
            <input type="submit" name="submit" value="Submit">
        </form>
        <hr>
        <div class="output">
        <h2>Sum: 
            <?php                                            
                    echo (int)$num1+(int)$num2; 
            ?>
        </h2>

        </div>
    </div>
    
         

    
</body>
</html>