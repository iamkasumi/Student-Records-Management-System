<?php
    error_reporting(E_ERROR);
    session_start();
    include ('../php/connect.php');

    // if not admin-user, stay sa home-page
    if (!isset($_SESSION['admin-user'])) {
        header('Location: home-page.php'); 
    }

    $select = "SELECT * FROM `archive-g7`";
    $allRecord = $conn->query($select);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Student, Record Management, System">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Archive</title>

	<link rel="stylesheet" type="text/css" href="../css/archived-per-year.css?v=<?php echo time(); ?>">
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
                
                <!-- MAIN CONTENT STARTS HERE -->
                <div class="main__content">
                    
                    <!-- TABLE CONTAINER -->
                    <div class="table-container">

                        <!-- BACK BUTTON -->
                        <div class="back-bttn">
                            <a href="archive-dashboard.php"><i class="fa-solid fa-arrow-left"></i></a>
                            <p>Archived Records - Grade 10</p>
                        </div>
                        
                        <hr>

                        <!-- SEARCH BAR -->
                        <div class="search-container">
                            <form action="" method="get">
                                <input type="text" id="search" placeholder="Search.." name="search" autocomplete="off">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>

                        <!-- TABLE STARTS HERE -->
                        <table class="data-table">
                            
                            <tr class="tb-headers">
                                <th>Name</th>
                                <th>LRN</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Sex</th>
                                <th>Birthday</th>
                                <th>Address</th>
                                <th>Year</th>
                                <th>Action</th>
                            </tr>

                            <?php
                                // Check if the search parameter is set
                                if (isset($_GET['search'])) {
                                    $filtervalues = $_GET['search'];
                                    $select_query = "SELECT * FROM `archive-g10` WHERE CONCAT(Name, LRN) LIKE '%$filtervalues%'";
                                } else {
                                    $select_query = "SELECT * FROM `archive-g10`";
                                }

                                $query_run = mysqli_query($conn, $select_query);

                                while ($fetch = mysqli_fetch_array($query_run)) {
                                    $LRN = $fetch['LRN'];
                            ?>

                            <tr class="data">

                                <td><?php echo $fetch['Name']; ?></td>
                                <td><?php echo $fetch['LRN']; ?></td>
                                <td><?php echo $fetch['Email']; ?></td>
                                <td><?php echo $fetch['Mobile']; ?></td>
                                <td><?php echo $fetch['Sex']; ?></td>
                                <td><?php echo $fetch['Birthday']; ?></td>
                                <td><?php echo $fetch['Address']; ?></td>
                                <td><?php echo $fetch['Year']; ?></td>

                                <form action="../php/restore-g10.php" method="post">
                                    <td>
                                    <input type="submit" value="Restore" class="edit-bttn" onclick="return confirm('Restore Records?')">
                                        <input type="hidden" name="LRN_restore" value="<?php echo $fetch['LRN']; ?>">
                                    </td>
                                </form>

                            </tr>
                            
                            <?php
                                }
                            ?>

                        </table>

                        <?php
                            if (mysqli_num_rows($query_run) == 0) {
                                echo "<h3><br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo records found...</h3>";
                            }
                        ?>

                
                    </div> <!-- TABLE ENDS HERE -->

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
                  
                <div class="sidebar__link">
                    <a href="manage-grades.php">
                        <i class="fa-solid fa-file"></i>
                        &nbsp; Manage Grades
                    </a>
                </div>

                  
                <div class="sidebar__link active_menu_link">
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
