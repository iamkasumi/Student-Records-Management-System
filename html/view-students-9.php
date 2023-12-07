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

    <title>View Students</title>

	<link rel="stylesheet" type="text/css" href="../css/view-students.css?v=<?php echo time(); ?>">
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
                        <p>View student records here.</p>
                    </div>
                </div> <!-- MAIN TITLE ENDS HERE -->

                <!-- MAIN CONTENT STARTS HERE -->
                <div class="main__content">
                    
                    <!-- TABLE CONTAINER STARTS HERE -->
                    <div class="table-container">

                        <p>View Student Records</p>
                        <hr>

                        <?php
                            //if view students was clicked
                            if (isset($_POST['ID'])) {

                                $id = $_POST['ID'];
                                
                                $sql = "SELECT * FROM `grade-9` WHERE ID = '$id' ";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_array($result);

                        ?>

                        <!-- START OF TABLE -->
                        <table class="view-students">
                            
                            <tr class="rows">
                                <th>Name:</th>
                                <td><?php echo $row['Name']; ?></td>
                            </tr>

                            <tr class="rows">
                                <th>Learner's Reference Number (LRN):</th>
                                <td><?php echo $row['LRN']; ?></td>
                            </tr>

                            <tr class="rows">
                                <th>Email Address:</th>
                                <td><?php echo $row['Email']; ?></td>
                            </tr>

                            <tr class="rows">
                                <th>Mobile Number:</th>
                                <td><?php echo $row['Mobile']; ?></td>
                            </tr>

                            <tr class="rows">
                                <th>Sex:</th>
                                <td><?php echo $row['Sex']; ?></td>
                            </tr>

                            <tr class="rows">
                                <th>Date of Birth (DOB):</th>
                                <td><?php echo $row['Birthday']; ?></td>
                            </tr>

                            <tr class="rows">
                                <th>Address:</th>
                                <td><?php echo $row['Address']; ?></td>
                            </tr>

                            <tr class="rows">
                                <th>Year:</th>
                                <td><?php echo $row['Year']; ?></td>
                            </tr>

                            <!-- BACK BUTTON -->
                            <tr>
                                <th class="edit-student">
                                    <a href="manage-stud-9.php"><h6>Back</h6></a>
                                </th>
                            </tr>

                            <?php
                                }
                                
                                else {
                                    echo "<script> alert('No records found!')</script>";
                                }
                            ?>

                        </table>    <!-- END OF TABLE -->

                    </div> <!-- TABLE CONTAINER ENDS HERE -->

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