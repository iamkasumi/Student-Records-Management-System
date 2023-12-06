<?php

    // ----- To conncect to database -----
    $conn = mysqli_connect ('localhost','root','','srms');
    
    if (!$conn) {
        die(mysqli_error($conn));
    }
    
?>