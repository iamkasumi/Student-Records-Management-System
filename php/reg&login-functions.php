<?php       // this contains all of the functions for php

    // Add password strength validation logic
    function isStrongPassword($password) {
        // For example, require a minimum length and a mix of uppercase, lowercase, numbers, and special characters
        return preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[-_$@!%*?&])[A-Za-z\d_$@!%*?&-]{8,}$/", $password);
    }

    // start of sign-up function 
    function signUp() {

        global $conn;

        if(isset($_POST['reg-submit'])) { //if submit is clicked

            //get these data
            $name = $_POST['full-name'];    
            $email = $_POST['email'];
            $password = $_POST['password'];
            $hash_password = password_hash($password, PASSWORD_DEFAULT);
            $acctType = $_POST['acctType'];

            // Validate password strength
            if (!isStrongPassword($password)) {
                echo "<script> alert('Password must be at least 8 characters long and include at least one uppercase letter, one lowercase letter, one number, and one special character.') </script>";
            } 
            
            else {
        
                //query
                $select_query = "SELECT * FROM `usertb` WHERE Email = '$email'";
                $result = mysqli_query($conn, $select_query);
                $rows_count = mysqli_num_rows($result);
                
                //if email exist
                if ($rows_count > 0) {
                    echo "<script> alert('Email already exists!') </script>";
                }  
                
                // if email doesn't exist
                else {
                    $insert_query = "INSERT INTO `usertb` (Name, Email, Password, Type)
                    VALUES ('$name', '$email', '$hash_password', '$acctType')";
                    
                    $sql_execute = mysqli_query($conn, $insert_query);
                    echo"<script> alert('Successfully registered!')</script>";
                    echo "<script> window.open('home-page.php', '_self')</script>";
                }
            }

        }

    } // end of sign-up function 


    // start of log-in function 
    function logIn() {

        global $conn;

        if (isset($_POST['login-submit'])) {

            $email = $_POST['email'];
            $password = $_POST['password'];
        
            // query
            $select = "SELECT * FROM `usertb` WHERE Email = '$email'";
            $result = mysqli_query($conn, $select);
            $rows_count = mysqli_num_rows($result);
            $row = mysqli_fetch_array($result);
            
            // if email exists
            if ($rows_count > 0) {

                if (password_verify($password, $row['Password'])) {
                
                    if ($row["Type"] == 'Admin') {              //if admin
                        $_SESSION['admin-user'] = $row['Name'];
                        header('Location: dashboard.php');
                    } else {                                    //if faculty
                        $_SESSION['fac-user'] = $row['Name'];
                        header('Location: fac-manage-grades.php');
                    } 
                
                } else {
                    echo "<script> alert('Incorrect Email or Password')</script>";
                }
            
            }  echo "<script> alert('User not found.')</script>"; //if not registered to database

        }   // end of log-in function    
    }
?>