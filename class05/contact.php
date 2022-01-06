<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <style> 
        *{box-sizing: border-box; margin: 0; padding: 0;}
        .contact-form, .output{margin: 0 auto; padding: 20px; background: #ccc; max-width: 800px;}
        h2{text-align: center; padding-bottom:20px}
        .input-box{width: 50%; display: block;margin: 0 auto;}
        input[type="text"],input[type="file"]{width:100%; height: 2rem; outline: 0; border:0;margin-bottom:10px;padding: 10px 20px;}
        input[type="submit"]{width: 8rem; height: 2rem; outline: none; border:none; display: block;text-align: center;margin: 0 auto;}
        hr{margin-bottom: 20px;}
        h1{color:green}
    </style>
</head>
<body>


    <div class="contact-form">
        <h2>Contact Us</h2>
        <form action="contact.php" method="post" enctype="multipart/form-data">
            <div class="input-box">
                <input type="text" name="username">
            </div>
            <div class="input-box">
                <input type="text" name="password">
            </div>
            
            <div class="input-box">
            
                <input type="file" name="upload-file">
                
            </div>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>


    <div class="output">
        <hr>
        <h1>Username: 
            <?php 
                if(isset($_POST["submit"]))
                {
                    echo $_POST["username"];
                } 
            ?>
        </h1>
        <h1>Password: 
        <?php 
                if(isset($_POST["submit"]))
                {
                    echo $_POST["password"];
                } 
            ?>
        </h1>   
        <h1>Uploaded File : 
            <?php 
                if(isset($_POST["submit"])){

                    $file_name = uniqid().'.jpg';
                    $tmp_name = $_FILES["upload-file"]['tmp_name'];
                    $file_size = $_FILES["upload-file"]['size'];

                    if($file_size < 100000){
                        echo "File uploaded successfully";         
                    }else{
                        echo "file is more than 1MB";
                    }

                    move_uploaded_file($tmp_name, $file_name);
                                
                    // unlink('61b88b1176a7a.jpg');
                                
                }
                                
        
            ?>
        </h1>
    </div>
    
   
</body>
</html>