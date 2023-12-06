<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    session_start();
    include ('../php/connect.php');
    include ('../php/functions.php');

    // functions
    logIn();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" content="Student, Record Management, System">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Home Page</title>

        <link rel="stylesheet" href="../css/home-page.css?v=<?php echo time(); ?>">
        <link rel="icon" type="image/x-icon" href="../images/hfm_logo.png">
    </head>

    <body>
        
        <!--THIS IS FOR NAV BAR-->
        <header>
            <div class="profile-image"><img src="../images/hfm_logo.png" /></div>
            <h1 class="nav-title">HOLY FAMILY MONTESSORI</h1>
            <nav>
                <ul class="menu">
                    <li><a href="home-page.php">Home</a></li>
                    <li><a href="about-us.php">About Us</a></li>
                    <li><a href="contact-us.php">Contact Us</a></li>
                </ul>
            </nav>
        </header>

        <!--This is the division created for the background image-->
        <div class="backgroundimage"></div>

        <!-----------LOGIN GUI----------------->
        <div class="form-container">
        
            <div class="form-body">
                <h2 class="title">LOG IN</h2>
        
                <form action="" method="post" class="the-form">
                    <input type="email" name="email" id="email" placeholder="Email" autocomplete="off" required>
                
                    <input type="password" name="password" id="password" placeholder="Password" autocomplete="off" required>
                    <img src="../images/eye-close.png" alt="eye" id="check">
                    
                    <input name="login-submit" type="submit" value="LOG IN">
                </form>

                <div class="form-footer">
                    <div>
                        <span>Don't have an account?</span> <a href="sign-up.php" style="text-decoration: underline;">Register here.</a>
                    </div>
                </div><!-- FORM FOOTER -->    
            </div><!-- FORM BODY-->
        </div><!-- FORM CONTAINER -->

        <div class="tagline">
            <h1>Faithful, Fervent, and True!</h1>
            <p>© 2023 Holy Family Montessori. All Rights Reserved</p>
        </div>

        <script src="../javascript/show-password.js"></script>

    </body>
</html>