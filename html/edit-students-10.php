<?php
    
    error_reporting(E_ERROR);
    session_start();
    include ('../php/connect.php');

    // if not admin-user, stay sa home-page
    if (!isset($_SESSION['admin-user'])) {
        header('Location: home-page.php'); 
    }

	$id = $_POST['ID'];
	$query = mysqli_query($conn,"SELECT * FROM `grade-10` WHERE ID = '$id'");
	$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Student, Record Management, System">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Update Students</title>

	<link rel="stylesheet" type="text/css" href="../css/edit-students.css?v=<?php echo time(); ?>">
    <link rel="icon" type="image/x-icon" href="../images/hfm_logo.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="../javascript/functions.js"></script>

</head>

<body>

    <div class="container">
        
        <!--------------FOR UPPER RIGHT NAV BAR----------->
        <nav class="navbar">
            <div class="navbar__left">
                <a class="active_link">Admin</a>
                <a>Faculty</a>
            </div>
        </nav> <!--------------END OF UPPER RIGHT NAV BAR----------->

        <main>

            <div class="main__container">
                
                <!-- MAIN TITLE STARTS HERE -->
                <div class="main__title">
                    <img src="../images/hello.svg" alt="An icon of a man in a study table." />
                    <div class="main__greeting">
                        <h1>Hello Montessorian!</h1>
                        <p>Update student records here.</p>
                    </div>
                </div> <!-- MAIN TITLE ENDS HERE -->

                <!-- MAIN CONTENT STARTS HERE -->
                <div class="main__content">
                    
                    <!-- FORM STARTS HERE -->
                    <div class="table-container">

                        <p>Update Student Records</p>
                        <hr>

                        <form action="../php/edit-studentsFunc-10.php" method="POST" class="stud-table">
                            
                            <!-- for ID -->
                            <input type="hidden" name="ID" value="<?php echo $row['ID']; ?>">

                            <!--------------------- Name ------------------------------------------>
                            <div>
                                <label class="label" for="Name">Name:</label>
                                <input type="text" name="name" id="editName" value="<?php echo $row['Name']; ?>" maxlength="50" autocomplete="off" required/>
                            </div>
                            
                        
                            <!------------------------ LRN --------------------------------------->
                            <div class="rows">
                                <label class="label" for="LRN">Learner's Reference Number (LRN):</label>
                                <input type="text" name="lrn" id="editLRN" value="<?php echo $row['LRN']; ?>" maxlength="12" autocomplete="off" required/>
                            </div>
                                
                            <!-------------------------- Email ID ------------------------------------->
                            <div class="rows">
                                <label class="label" for="email">Email Address:</label>
                                <input type="email" name="emailID" id="editEmail" value="<?php echo $row['Email']; ?>" maxlength="100" autocomplete="off" required/>
                            </div>
                                
                            <!-------------------------- Mobile Number ------------------------------------->
                            <div class="rows">
                                <label class="label" for="mobile">Mobile Number:</label>
                                <input type="text" name="mobileNumber" id="editMobile" value="<?php echo $row['Mobile']; ?>" maxlength="15" autocomplete="off" required>
                            </div>
                                
                            <!---------------------- Sex ------------------------------------->
                            <div class="rows">
                                <label class="label" for="sex">Sex:</label>
                                <select name="sex" id="editSex" value="<?php echo $row['Sex']; ?>" required>
                                    <option class="holder" value="" disabled selected>Sex</option>
                                    <option value="Male" <?php echo ($row['Sex'] == 'Male')?"selected":""; ?> >Male</option>
                                    <option value="Female" <?php echo ($row['Sex'] == 'Female')?"selected":""; ?> >Female</option>
                                </select>
                            </div>
                                
                            <!--------------------------Date Of Birth----------------------------------->
                            <div class="rows">
                                <label class="label" for="birthday">Date of Birth (DOB):</label>
                                <input type="date" id="birthday" name="birthday" id="editBirthday" value="<?php echo $row['Birthday']; ?>" required>
                            </div>
                                
                            <!------------------------- Address ---------------------------------->
                            <div class="rows">
                                <label class="label" for="address">Address:</label>
                                <input type="text" name="Address" id="editAddress" value="<?php echo $row['Address']; ?>" maxlength="100" autocomplete="off" required/>
                            </div>
                        
                            <!---------------------------- Year ----------------------------------->
                            <div class="rows">
                                <label class="label" for="grade">Year level:</label>
                                <select name="year" id="editYear" value="<?php echo $row['Year']; ?>" required>
                                    <option class="holder" value="" disabled selected>Year level</option>
                                    <option value="Grade 7" <?php echo ($row['Year'] == 'Grade 7')?"selected":""; ?> >Grade 7</option>
                                    <option value="Grade 8" <?php echo ($row['Year'] == 'Grade 8')?"selected":""; ?> >Grade 8</option>
                                    <option value="Grade 9" <?php echo ($row['Year'] == 'Grade 9')?"selected":""; ?> >Grade 9</option>
                                    <option value="Grade 10" <?php echo ($row['Year'] == 'Grade 10')?"selected":""; ?> >Grade 10</option>
                                </select>
                            </div>
                                
                            <!----------------------- Submit ------------------------------->
                            <div>
                                <input name="submit" type="submit" value="Edit">
                            </div>

                            <!----------------------- Back ------------------------------->
                            <div class="new-student">
                                <a href="manage-stud-10.php"><h6>Back</h6></a>
                            </div>
                            
                        </form>
                    </div> <!-- FORM ENDS HERE -->

                </div> <!-- MAIN CONTENT ENDS HERE -->

            </div>

        </main>

        <!-- SIDEBAR STARTS HERE -->
        <div id="sidebar">

            <div class="sidebar__title">
                <div class="sidebar__img">
                    <img src="../images/hfm_logo.png" alt="logo" />
                    <h1>Student Record Management System</h1>
                </div>
            </div>

            <div class="sidebar__menu">
                
                <div class="sidebar__link">
                    <a href="dashboard.php">
                        <i class="fa fa-home"></i>
                        &nbsp; Dashboard
                    </a>
                </div>
                  
                <h2>Process</h2>
                  
                <div class="sidebar__link">
                    <a href="add-students.php">
                        <i class="fa-solid fa-plus"></i>
                        &nbsp; Add Students
                    </a>
                </div>
        
                <div class="sidebar__link active_menu_link">
                    <a href="manage-students.php">
                        <i class="fa-solid fa-people-roof"></i>
                        &nbsp; Manage Students
                    </a>
                </div>
                  
                <div class="sidebar__link">
                    <a href="manage-grades.php">
                        <i class="fa-solid fa-file"></i>
                        &nbsp; Manage Grades
                    </a>
                </div>

                <div class="sidebar__link">
                    <a href="archive-dashboard.php">
                        <i class="fa-solid fa-archive"></i>
                        &nbsp; Archived
                    </a>
                </div>
                  
                <div class="sidebar__user">
                    <a>
                        <i class="fa-regular fa-user"></i>
                        &nbsp; <?php echo $_SESSION['admin-user']?>
                    </a>
                </div> 
                
                <!--<hr class='divider'>-->

                <div class="sidebar__logout">
                    <a href="../php/logout.php" onclick="return confirm('Are you sure you want to Log Out?')">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        &nbsp; Log out
                    </a>
                </div>

            </div>

        </div>

    </div>

</body>
</html>