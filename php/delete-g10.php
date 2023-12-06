<?php
    
    $id = $_POST['ID'];
    include ("../php/connect.php");
    mysqli_multi_query($conn, "DELETE FROM `grade-9` WHERE ID = '$id'; DELETE FROM `score-g9` WHERE StudentID='$id'");
    echo "<script> alert('Records successfully deleted!')</script>";
    echo "<script> window.open('../html/manage-stud-9.php', '_self')</script>";
  
?>

<?php

    /*$id = $_POST['ID'];
    include("../php/connect.php");

    // Used prepared statement to prevent SQL injection
    $stmt = $conn->prepare("
    DELETE FROM `studentstb` WHERE ID = ?;
    DELETE FROM `gradestb` WHERE StudentID=?
    ");
    $stmt->bind_param("s", $id, $id);
    $stmt->execute();
    $stmt->close();
    
    echo "<script> alert('Records successfully deleted!')</script>";
    echo "<script> window.open('../html/manage-students.php', '_self')</script>";*/
    
?>