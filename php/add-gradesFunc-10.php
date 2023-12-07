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
    
        $select = "SELECT * FROM `score-g10` WHERE StudentID = '$StudID' ";
        $result = mysqli_query($conn, $select);
        $rows_count = mysqli_num_rows($result);
        
        if ($rows_count > 0) {
            echo "<script> alert('Grades were already uploaded! Want to edit instead?')</script>";
            echo "<script> window.open('../html/manage-grades-10.php', '_self')</script>";
            
        }
        
        else {

            $insert = "INSERT INTO `score-g10` (StudentID, Filipino, English, Mathematics, Science, MAPEH, AP, ESP, TLE)
            VALUES ('$StudID', '$Filipino', '$English', '$Mathematics', '$Science', '$MAPEH', '$AP', '$ESP', '$TLE')";
            
            $sql_execute = mysqli_query($conn, $insert);
            echo "<script> alert('Grades successfully added!')</script>";
            echo "<script> window.open('../html/manage-grades-10.php', '_self')</script>";
        }
        
    }
    
?>