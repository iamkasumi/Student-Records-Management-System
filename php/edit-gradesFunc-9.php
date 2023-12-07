<?php
    include('../php/connect.php');

    if (isset($_POST['submit'])) {

        $StudID = $_POST['ID'];
        $Filipino = $_POST['filipino'];
        $English = $_POST['english'];
        $Mathematics = $_POST['mathematics'];
        $Science = $_POST['science'];
        $MAPEH = $_POST['mapeh'];
        $AP = $_POST['ap'];
        $ESP = $_POST['esp'];
        $TLE = $_POST['tle'];
    
        mysqli_query($conn,"UPDATE `score-g9` SET 
            `StudentID`='$StudID', 
            `Filipino`='$Filipino', 
            `English`='$English', 
            `Mathematics`='$Mathematics', 
            `Science`='$Science', 
            `MAPEH`='$MAPEH', 
            `AP`='$AP', 
            `ESP`='$ESP',
            `TLE`='$TLE'
            WHERE StudentID ='$StudID'");
        
        $select = "SELECT * FROM `score-g9` WHERE StudentID = '$StudID'";
        $result = mysqli_query($conn, $select);
        $rows_count = mysqli_num_rows($result);

        if ($rows_count > 0) {
            echo "<script> alert('Grades successfully edited!')</script>";
            echo "<script> window.open('../html/manage-grades-9.php', '_self')</script>";
        }
        
        else {
            echo "<script> alert('No grades to edit!')</script>";
            echo "<script> window.open('../html/manage-grades-9.php', '_self')</script>";
        }
        
    }

    
    
    
?>