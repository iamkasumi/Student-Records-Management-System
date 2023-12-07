<?php
    
    error_reporting(E_ERROR);
    session_start();
    include ('../php/connect.php');

    // if not admin-user, stay sa home-page
    if (!isset($_SESSION['admin-user'])) {
        header('Location: home-page.php'); 
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Student, Record Management, System">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Students</title>

	<link rel="stylesheet" type="text/css" href="../css/add-students.css?v=<?php echo time(); ?>">
    <link rel="icon" type="image/x-icon" href="../images/hfm_logo.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                
                <!-- MAIN TITLE STARTS HERE
                <div class="main__title">
                    <img src="../images/hello.svg" alt="An icon of a man in a study table." />
                    <div class="main__greeting">
                        <h1>Hello Montessorian!</h1>
                        <p>Enter student records here.</p>
                    </div>
                </div> MAIN TITLE ENDS HERE -->

                <!-- MAIN CONTENT STARTS HERE -->
                <div class="main__content">
                    
                    <!-- FORM STARTS HERE -->
                    <div class="table-container">

                        <!-- BACK BUTTON -->
                        <div class="back-bttn">
                            <a href="add-students.php"><i class="fa-solid fa-arrow-left"></i></a>
                            <p>Add Students - Grade 7</p>
                        </div>
                        
                        <hr>
                        
                        <form action="../php/add-studentsFunc-7.php" method="post" class="stud-table">
                            
                            <!-- for ID -->
                            <input type="hidden" name="ID">

                            <!--------------------- Name ------------------------------------------>
                            <div>
                                <label class="label" for="Name">Name:</label>
                                <input type="text" name="name" id="name" maxlength="50" placeholder="Input full name" autocomplete="off" required/>
                            </div>
                            
                        
                            <!------------------------ LRN --------------------------------------->
                            <div class="rows">
                                <label class="label" for="LRN">Learner's Reference Number (LRN):</label>
                                <input type="text" name="lrn" id="lrn" maxlength="12" placeholder="Input LRN" autocomplete="off" required/>
                            </div>
                                
                            <!-------------------------- Email ID ------------------------------------->
                            <div class="rows">
                                <label class="label" for="email">Email Address:</label>
                                <input type="email" name="emailID" id="emailID" maxlength="100" placeholder="user@gmail.com" autocomplete="off" required/>
                            </div>
                                
                            <!-------------------------- Mobile Number ------------------------------------->
                            <div class="rows">
                                <label class="label" for="mobile">Mobile Number:</label>
                                <input type="text" name="mobileNumber" id="mobileNumber" maxlength="15" placeholder=" 09xx-xxx-xxxx" autocomplete="off" required>
                            </div>
                                
                            <!---------------------- Sex ------------------------------------->
                            <div class="rows">
                                <label class="label" for="sex">Sex:</label>
                                <select name="sex" id="sex" required>
                                    <option class="holder" value="" disabled selected>Sex</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                                
                            <!--------------------------Date Of Birth----------------------------------->
                            <div class="rows">
                                <label class="label" for="birthday">Date of Birth (DOB):</label>
                                <input type="date" id="birthday" name="birthday" required>
                            </div>
                                
                            <!------------------------- Address ---------------------------------->
                            <div class="rows">
                                <label class="label" for="address">Address:</label>
                                <input type="text" name="address" id="address" maxlength="100" placeholder="Input your address" autocomplete="off" required/>
                            </div>
                        
                            <!---------------------------- Year ----------------------------------->
                            <div class="rows">
                                <label class="label" for="grade">Year level:</label>
                                <select name="year" id="year" required>
                                    <option class="holder" value="" disabled selected>Year level</option>
                                    <option value="Grade 7">Grade 7</option>
                                </select>
                            </div>
                                
                            <!----------------------- Submit and Reset ------------------------------->
                            <div>
                                <input name="add-submit" type="submit" value="Submit">
                                <input name="reset" type="reset" value="Reset">
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
                  
                <div class="sidebar__link active_menu_link">
                    <a href="add-students.php">
                        <i class="fa-solid fa-plus"></i>
                        &nbsp; Add Students
                    </a>
                </div>
        
                <div class="sidebar__link">
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