<?php   
    session_start(); //to ensure you are using same session
    session_destroy(); //destroy the session
    header("location:../html/home-page.php"); //to redirect back to "login.php" after logging out
    exit();
?>