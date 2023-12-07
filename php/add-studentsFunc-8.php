<?php

    include ('../php/connect.php');

    if (isset($_POST['add-submit'])) {
                
        $LRN = $_POST['lrn'];
        $Name = $_POST['name'];
        $Email = $_POST['emailID'];
        $Mobile = $_POST['mobileNumber'];
        $Sex = $_POST['sex'];
        $DOB = $_POST['birthday'];
        $Address = $_POST['address'];
        $Year = $_POST['year'];

        $select = "SELECT * FROM `grade-8` WHERE LRN = '$LRN' OR Email = '$Email'";
        $result = mysqli_query($conn, $select);
        $rows_count = mysqli_num_rows($result);
        
        if ($rows_count > 0) {
            echo "<script> alert('Student already exist!')</script>";
            echo "<script> window.open('../html/add-students-8.php', '_self')</script>";
        }
        
        else {

            $insert = "INSERT INTO `grade-8` (LRN, Name, Email, Mobile, Sex, Birthday, Address, Year)
            VALUES ('$LRN', '$Name', '$Email', '$Mobile', '$Sex', '$DOB', '$Address', '$Year')";
            
            $sql_execute = mysqli_query($conn, $insert);
            echo "<script> alert('Record successfully added!')</script>";
            echo "<script> window.open('../html/manage-stud-8.php', '_self')</script>";
        }
    }
?>