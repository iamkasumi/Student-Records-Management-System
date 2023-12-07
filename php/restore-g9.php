<?php
    include ('../php/connect.php');

    // Check if LRN_restore parameter is set in the POST data
    if (isset($_POST['LRN_restore'])) {
        $LRN = $_POST['LRN_restore'];

        // Restore record from archive
        $query = mysqli_query($conn, "SELECT * FROM `archive-g9` WHERE `LRN` = '$LRN'");
        $fetch = mysqli_fetch_assoc($query);

        if ($fetch) {
            // Restore record
            $restore_query = "INSERT INTO `grade-9` (Name, LRN, Email, Mobile, Sex, Birthday, Address, Year) 
                            SELECT `Name`, `LRN`, `Email`, `Mobile`, `Sex`, `Birthday`, `Address`, `Year` 
                            FROM `archive-g9` 
                            WHERE `LRN` ='$LRN'";
            $restore_result = mysqli_query($conn, $restore_query);

            if ($restore_result) {
                // Delete record from archive
                $delete_query = "DELETE FROM `archive-g9` WHERE `LRN`='$LRN'";
                $delete_result = mysqli_query($conn, $delete_query);

                if ($delete_result) {
                    // Success message
                    echo "<script>
                        alert('Record Restored Successfully');
                        window.location.href='../html/archive-9.php';
                        </script>";
                    exit();
                } else {
                    $errorMessage = "Error deleting record from archive: " . mysqli_error($conn);
                }
            } else {
                $errorMessage = "Error restoring record: " . mysqli_error($conn);
            }
        } else {
            $errorMessage = "Record not found in archive.";
        }
    } else {
        $errorMessage = "LRN_restore parameter is missing.";
    }

    // Display error message and redirect
    echo "<script>
        alert('$errorMessage');
        window.location.href='../html/manage-stud-9.php';
        </script>";
?>
