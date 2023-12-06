<?php

    // connectors
    include ('../php/connect.php');
    include ('../php/functions.php');

    // functions
    signUp();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" content="Student, Record Management, System">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Sign Up</title>
        
        <link rel="stylesheet" href="../css/sign-up.css?v=<?php echo time(); ?>">
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
                <h2 class="title">REGISTER</h2>
        
                <form action="" method="post" class="the-form">

                    <input type="text" name="full-name" id="full-name" placeholder="Full Name" autocomplete="off" required>

                    <input type="email" name="email" id="email" placeholder="Email" autocomplete="off" required>
        
                    <input type="password" name="password" id="password" placeholder="Password" autocomplete="off" required>
                    <img src="../images/eye-close.png" alt="eye" id="check">

                    <select name="acctType" id="AcctType" required>
                        <option class="holder" value="" disabled selected>Select account type</option>
                        <option value="Admin">Admin</option>
                        <option value="Faculty">Faculty</option>
                    </select>
        
                    <input name="reg-submit" type="submit" value="REGISTER">

                </form>

                <div class="form-footer">
                    <div>
                        <span>Already have an account?</span> <a href="home-page.php" style="text-decoration: underline;">Log In</a>
                    </div>
                </div><!-- FORM FOOTER -->
            </div><!-- FORM BODY-->
        </div><!-- FORM CONTAINER -->

        <script src="../javascript/show-password.js"></script>
        
    </body>
</html>