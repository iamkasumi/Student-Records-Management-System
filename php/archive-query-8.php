<?php
    include ('../php/connect.php');

    // Archive all records from studentstb
    $query = mysqli_query($conn, "SELECT * FROM `grade-8`");

    while ($fetch = mysqli_fetch_array($query)) {
        // Archive record
        $archive_query = "INSERT INTO `archive-g8` (Name, LRN, Email, Mobile, Sex, Birthday, Address, Year) 
                          VALUES ('$fetch[Name]', '$fetch[LRN]', '$fetch[Email]', '$fetch[Mobile]', '$fetch[Sex]', '$fetch[Birthday]', '$fetch[Address]', '$fetch[Year]')";
        $archive_result = mysqli_query($conn, $archive_query);

        if (!$archive_result) {
            die("Error archiving record: " . mysqli_error($conn));
        }

        // Delete record from studentstb
        $delete_query = "DELETE FROM `grade-8` WHERE `LRN` = '$fetch[LRN]'";
        $delete_result = mysqli_query($conn, $delete_query);

        if (!$delete_result) {
            die("Error deleting record: " . mysqli_error($conn));
        }
    }
?>


