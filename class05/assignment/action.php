 
<?php
                         
if(isset($_POST["submit"]))
{
    $username = $_POST["username"]; 
    $password = $_POST["password"]; 
} 

$yourUsername = 'username';
$yourPassword = 'pass123';

?> 
 
        <div class="output">
            <h2>
                <?php 
                    if(isset($username)){                   
                        if($username == $yourUsername && $password == $yourPassword)
                        {
                            echo "Authorized";
                        }else{ 
                            echo "Invalid Credential";
                        }
                    }
                ?>
            </h2>  
        </div>



                        