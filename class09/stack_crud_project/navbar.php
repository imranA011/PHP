



<!-- Navigation-->
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase sticky-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.php">Stack Overflow</a>

                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        

                    <?php
                        if(!isset($_SESSION['user_id'])):                  
                    ?>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="questions-view.php">Questions</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="login.php">Login</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="register.php">Register</a>
                        </li>

                        <?php

                            else:

                        ?>                       
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="logout.php">(<?= $_SESSION['user_name']?>) Logout</a>
                        </li>

                        <?php
                            
                            endif;                  
                        ?>

                    </ul>
                </div>
            </div>
        </nav>