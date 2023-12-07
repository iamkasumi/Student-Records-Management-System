<?php
    $id = $_POST['ID'];
    include("../php/connect.php");

    // Start a transaction
    mysqli_autocommit($conn, false);
    $success = true;

    try {
        // Select the record from students data before deletion
        $select_query = "SELECT * FROM `grade-10` WHERE ID = '$id'";
        $select_result = mysqli_query($conn, $select_query);

        if (!$select_result) {
            throw new Exception("Error selecting record: " . mysqli_error($conn));
        }

        // Fetch the record
        $fetch = mysqli_fetch_array($select_result);

        // Archive record
        $archive_query = "INSERT INTO `archive-g10` (Name, LRN, Email, Mobile, Sex, Birthday, Address, Year)
                        VALUES ('$fetch[Name]', '$fetch[LRN]', '$fetch[Email]', '$fetch[Mobile]', '$fetch[Sex]', '$fetch[Birthday]', '$fetch[Address]', '$fetch[Year]')";
        $archive_result = mysqli_query($conn, $archive_query);

        if (!$archive_result) {
            throw new Exception("Error archiving record: " . mysqli_error($conn));
        }

        // Fetch the result set to avoid "Commands out of sync" error
        mysqli_free_result($select_result);

        // Delete record from studentstb
        $delete_query_grade = "DELETE FROM `grade-10` WHERE ID = '$id'";
        $delete_result_grade = mysqli_query($conn, $delete_query_grade);

        if (!$delete_result_grade) {
            throw new Exception("Error deleting record from grade-10: " . mysqli_error($conn));
        }

        // Delete record from score-g10
        $delete_query_score = "DELETE FROM `score-g10` WHERE StudentID = '$id'";
        $delete_result_score = mysqli_query($conn, $delete_query_score);

        if (!$delete_result_score) {
            throw new Exception("Error deleting record from score-g10: " . mysqli_error($conn));
        }

        // Commit the transaction
        mysqli_commit($conn);
    } catch (Exception $e) {
        // Rollback the transaction if any query fails
        mysqli_rollback($conn);
        $success = false;
        echo "<script> alert('Error: " . $e->getMessage() . "');</script>";
    }

    // Set autocommit back to true
    mysqli_autocommit($conn, true);

    // If the transaction was successful, display success message
    if ($success) {
        echo "<script> alert('Record successfully deleted and moved to archive.')</script>";
        echo "<script> window.open('../html/manage-stud-10.php', '_self')</script>";
    }
?>
