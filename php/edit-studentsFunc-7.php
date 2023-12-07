<?php
    include('../php/connect.php');

    $id = $_POST['ID'];
    $name = $_POST['name'];
    $lrn = $_POST['lrn'];
    $email = $_POST['emailID'];
    $mobilenum = $_POST['mobileNumber'];
    $sex = $_POST['sex'];
    $dob = $_POST['birthday'];
    $address = $_POST['Address'];
    $year = $_POST['year'];
 
    if (isset($_POST['submit'])) {
        
        mysqli_query($conn,"UPDATE `grade-7` SET 
        `Name`='$name', 
        `LRN`='$lrn', 
        `Email`='$email', 
        `Mobile`='$mobilenum', 
        `Sex`='$sex', 
        `Birthday`='$dob', 
        `Address`='$address', 
        `Year`='$year' WHERE ID ='$id'");
        
        echo "<script> alert('Record successfully edited!')</script>";
        echo "<script> window.open('../html/manage-stud-7.php', '_self')</script>";
    }

    else {
        echo "<script> window.open('../html/manage-stud-7.php', '_self')</script>";
    }
    
    
?>