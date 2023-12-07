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

    <title>Upload Grades</title>

	<link rel="stylesheet" type="text/css" href="../css/add-grades.css?v=<?php echo time(); ?>">
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
                
                <!-- MAIN TITLE STARTS HERE -->
                <div class="main__title">
                    <img src="../images/hello.svg" alt="An icon of a man in a study table." />
                    <div class="main__greeting">
                        <h1>Hello Montessorian!</h1>
                        <p>Upload grades here.</p>
                    </div>
                </div> <!-- MAIN TITLE ENDS HERE -->

                <!-- MAIN CONTENT STARTS HERE -->
                <div class="main__content">
                    
                    <!-- FORM STARTS HERE -->
                    <div class="table-container">

                        <p>Upload Grades</p>
                        <hr>

                        <?php
                            if (isset($_POST['ID'])) {

                                $id = $_POST['ID'];
                                
                                $sql = "SELECT * FROM `grade-9` WHERE ID = '$id' ";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_array($result);
                        ?>

                        <div class="display-info">
                            
                            <table class="display-data">

                                <tr class="rows">
                                    <th class="stud-header">Name:</th>
                                    <td class="stud-display"><?php echo $row['Name']; ?></td>
                                </tr>
    
                                <tr class="rows">
                                    <th class="stud-header">Learner's Reference Number (LRN):</th>
                                    <td class="stud-display"><?php echo $row['LRN']; ?></td>
                                </tr>
    
                            </table>
                        </div>

                        <form action="../php/add-gradesFunc-9.php" method="post" class="stud-table">
                            
                            <!-- for ID -->
                            <input type="hidden" name="ID" value="<?php echo $_POST['ID']; ?>">
                            
                            <!--------------------- Filipino ------------------------------------------>
                            <div>
                                <label class="label" for="subj1">Filipino:</label>
                                <input type="number" name="filipino" maxlength="3" placeholder="Input grade" autocomplete="off" required/>
                            </div>
                        
                            <!------------------------ English --------------------------------------->
                            <div class="rows">
                                <label class="label" for="subj2">English:</label>
                                <input type="number" name="english" maxlength="3" placeholder="Input grade" autocomplete="off" required/>
                            </div>
                                
                            <!-------------------------- Mathematics ------------------------------------->
                            <div class="rows">
                                <label class="label" for="subj3">Mathematics:</label>
                                <input type="number" name="mathematics" maxlength="3" placeholder="Input grade" autocomplete="off" required>
                            </div>
                                
                            <!-------------------------- Science ------------------------------------->
                            <div class="rows">
                                <label class="label" for="subj4">Science:</label>
                                <input type="number" name="science" maxlength="3" placeholder="Input grade" autocomplete="off" required>
                            </div>
                                
                            <!---------------------- MAPEH ------------------------------------->
                            <div class="rows">
                                <label class="label" for="subj5">MAPEH:</label>
                                <input type="number" name="mapeh" maxlength="3" placeholder="Input grade" autocomplete="off" required>
                            </div>
                                
                            <!-------------------------- Araling Panlipunan (AP) ----------------------------------->
                            <div class="rows">
                                <label class="label" for="subj6">Araling Panlipunan (AP):</label>
                                <input type="number" name="ap" maxlength="3" placeholder="Input grade" autocomplete="off" required>
                            </div>
                                
                            <!------------------------- Edukasyon sa Pagpapakatao (ESP) ---------------------------------->
                            <div class="rows">
                                <label class="label" for="subj7">Edukasyon sa Pagpapakatao (ESP):</label>
                                <input type="number" name="esp" maxlength="3" placeholder="Input grade" autocomplete="off" required>
                            </div>
                        
                            <!---------------------------- Technology and Livelihood Education (TLE) ----------------------------------->
                            <div class="rows">
                                <label class="label" for="subj8">Technology and Livelihood Education (TLE):</label>
                                <input type="number" name="tle" maxlength="3" placeholder="Input grade" autocomplete="off" required>
                            </div>
                                
                            <!----------------------- Submit and Reset ------------------------------->
                            <div>
                                <input class="submit" name="submit" type="submit" value="Submit">
                                <input class="reset" name="reset" type="reset" value="Reset">
                            </div>

                            <!----------------------- Back ------------------------------->
                            <div class="new-student">
                                <a href="manage-grades-9.php"><h6>Back</h6></a>
                            </div>

                            <?php
                                }
                                
                                else {
                                    echo "<script> alert('No records found!')</script>";
                                }
                            ?>
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
        
                <div class="sidebar__link">
                    <a href="manage-students.php">
                        <i class="fa-solid fa-people-roof"></i>
                        &nbsp; Manage Students
                    </a>
                </div>
                  
                <div class="sidebar__link active_menu_link">
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