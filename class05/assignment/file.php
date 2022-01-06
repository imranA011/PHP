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
        input[type="file"],
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
        <h1>Task 05</h1>
        <form action="file.php" method="post" enctype="multipart/form-data">         
            <input type="file" name="upload-file" >               
            <input type="submit" name="submit" value="send">
        </form>         
    </div>  

</body>
</html>


<?php

    if(isset($_POST["submit"]))
    {
        $tmpName = $_FILES["upload-file"]['tmp_name'];
        $fileName = $_FILES["upload-file"]['name'];    
        $fileSize = $_FILES["upload-file"]['size'];    
            
        if($fileSize < 100000){
            move_uploaded_file($tmpName, 'image/'.$fileName); 
            echo "file uploaded successfully";
        }else{
            echo "file is more than 2MB";
        }
        
    } 
                         
                      
?>  