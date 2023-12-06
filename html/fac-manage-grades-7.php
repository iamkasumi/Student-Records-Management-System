<?php
    
    error_reporting(E_ERROR);
    session_start();
    include ('../php/connect.php');

    $select = "SELECT * FROM `grade-7`";
    $allRecord = $conn->query($select);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Student, Record Management, System">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Manage Grades</title>

	<link rel="stylesheet" type="text/css" href="../css/fac-manage-grades-byYear.css?v=<?php echo time(); ?>">
    <link rel="icon" type="image/x-icon" href="../images/hfm_logo.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="container">
        
        <!--------------FOR UPPER RIGHT NAV BAR----------->
        <nav class="navbar">
            <div class="navbar__left">
                <a>Admin</a>
                <a class="active_link">Faculty</a>
            </div>
        </nav> <!--------------END OF UPPER RIGHT NAV BAR----------->

        <main>

            <div class="main__container">
                
                <!-- MAIN TITLE STARTS HERE
                <div class="main__title">
                    <img src="../images/hello.svg" alt="An icon of a man in a study table." />
                    <div class="main__greeting">
                        <h1>Hello Montessorian!</h1>
                        <p>Manage student grades here.</p>
                    </div>
                </div> MAIN TITLE ENDS HERE -->

                <!-- MAIN CONTENT STARTS HERE -->
                <div class="main__content">
                    
                    <!-- TABLE CONTAINER -->
                    <div class="table-container">

                        <!-- BACK BUTTON -->
                        <div class="back-bttn">
                            <a href="fac-manage-grades.php"><i class="fa-solid fa-arrow-left"></i></a>
                            <p>Grade 7</p>
                        </div>
                        
                        <hr>
                        
                        <!-- SEARCH BAR -->
                        <div class="search-container">

                            <?php
                                if(isset($_GET['search'])) {
                                    $filtervalues = $_GET['search'];
                                    $select_query = "SELECT * FROM `grade-7` WHERE CONCAT(Name, LRN) LIKE '%$filtervalues%'";
                                } else {
                                    $select_query = "SELECT * FROM `grade-7`";
                                }
                                    $query_run = mysqli_query($conn, $select_query);
                            ?>

                            <form action="" method="get">
                                <input type="text" placeholder="Search.." name="search" autocomplete="off">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                            
                        </div>
                        
                        <!-- TABLE STARTS HERE -->
                        <table class="data-table">
                            
                            <tr class="tb-headers">
                                <th>Name</th>
                                <th>LRN</th>
                                <th>Upload</th>
                                <th>View</th>
                                <th>Edit</th>
                            </tr>
                                
                            <?php
                                while($row = mysqli_fetch_array($query_run)) {
                            ?>
                                
                            <tr class="data">
                                    <td><?php echo $row['Name']; ?></td>
                                    <td><?php echo $row['LRN']; ?></td>
                                
                                
                                <form action="fac-add-grades-7.php" method="post">
                                    <td>
                                        <input type="submit" value="Upload" class="add-bttn">
                                        <input type="hidden" name="ID" value="<?php echo $row['ID']; ?>">
                                    </td>
                                </form>

                                <form action="fac-view-grades-7.php" method="post">
                                    <td>
                                        <input type="submit" value="View" class="view-bttn">
                                        <input type="hidden" name="ID" value="<?php echo $row['ID']; ?>">
                                    </td>
                                </form>

                                <td>
                                    <div class="tooltip">
                                        <input type="submit" value="Edit" class="edit-bttn">
                                        <input type="hidden" name="ID" value="<?php echo $row['ID']; ?>">
                                        <span class="tooltiptext">Please contact the registrar to edit student's grades.</span>
                                    </div>
                                </td>

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
                  
                <h2>Process</h2>
                  
                <div class="sidebar__link active_menu_link">
                    <a href="fac-manage-grades.php">
                        <i class="fa-solid fa-file"></i>
                        &nbsp; Manage Grades
                    </a>
                </div>
                  
                <div class="sidebar__user">
                    <a>
                        <i class="fa-regular fa-user"></i>
                        &nbsp; <?php echo $_SESSION['fac-user']?>
                    </a>
                </div> 

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