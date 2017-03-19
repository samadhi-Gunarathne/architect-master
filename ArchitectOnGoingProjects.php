<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Architect</title>
<link rel="stylesheet" type="text/css" href="CSS/architectEdit.css">
<link rel="stylesheet" type="text/css" href="profcss/style_theme.css">
<link rel="stylesheet" type="text/css" href="profcss/style.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="profcss/opensans.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body bgcolor="grey" class="theme-15">

<!--Navbar-->
<div class="top">
	<ul class="navbar theme-d2 left-align large">

		<li><a href="#" class="padding-large theme-d4"><i class="fa fa-home margin-right"></i>Architect</a></li>
		
	</ul>
</div>

<!--Page Container-->
<div class="container content" style="max-width:1400px;margin-top:50px;margin-left: 10px">
	<!--The Grid-->
	<div class="row">

		<!-- left panel -->
                <ul id="navigationbarEdit">
            <li><a id="editItem" href="ArchitectNotification.php">Notification</a></li>
            <li><a id="activeEdit" href="ArchitectOnGoingProjects.php">On Going Projects</a></li>
            <li><a id="editItem" href="ArchitectManageProjects.php">Gallery</a></li>
            <li><a id="editItem" href="ArchitectManageAwards.php">Manage Awards</a></li>
            <li><a id="editItem" href="ArchitectCompletedProjects.php">Completed Projects</a></li>
            
            <li><a id="editItem" href="ArchitectAppointments.php">Appointments</a></li>
            <li><a id="editItem" href="ArchitectCustomers.php">Customers</a></li>
            <li><a id="editItem" href="ArchitectConsultants.php">Consultants</a></li>
            
            <li><a id="editItem" href="ArchitectReports.php">Reports</a></li>
            <li><a id="editItem" href="ArchitectSettings.php">Settings</a></li>
            <li><a id="editItem" href="index.php">Logout</a></li>

            </ul>

        <div style="margin-left:30%;padding:1px 16px;height:1000px;"><br><br>

            <h1><b><center>On Going Projects</center></b></h1>

            <table>
                <tr>
                    <th style="width: 35%;"><h2>Industrial</h2></th>
                    <th style="width: 35%;"><h2>Residential</h2></th>
                    <th style="width: 35%;"><h2>Community</h2></th>
                </tr>


                <tr>

                    <?php
                    require_once './db/dbConnection.php';

                    $sql = "SELECT CONCAT (customer.fname , '_', customer.lname ) AS det  , project.city AS city , project.progress/100 as prog , project.id as id FROM project INNER JOIN customer ON project.customer_id=customer.id WHERE project.category='Industrial' AND project.progress!=100 AND project.architect_id='" . $_SESSION["id"] . "' AND project.status='Active' ORDER BY city ASC;";
                    $result = $conn->query($sql);

                    echo '<td valign="top">';
                    echo '<ul id="projlist">';
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {



                            echo '<li ><a id = "proj" href = "ArchitectViewProject.php?id=' . $row["id"] . '">' . $row["city"] . '<div>' . $row["det"] . '</div><br><meter style = "width: 100%;" value = "' . $row["prog"] . '"></meter></a></li>';
                            echo '<li class = "brk"></li>';
                        }
                    }
                    echo '</ul>';
                    echo '</td>';



                    $sql = "SELECT CONCAT (customer.fname , '_', customer.lname ) AS det  , project.city AS city , project.progress/100 as prog , project.id as id FROM project INNER JOIN customer ON project.customer_id=customer.id WHERE project.category='Residential' AND project.progress!=100 AND project.architect_id='" . $_SESSION["id"] . "' AND project.status='Active' ORDER BY city ASC;";
                    $result = $conn->query($sql);

                    echo '<td valign="top">';
                    echo '<ul id="projlist">';
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {



                            echo '<li ><a id = "proj" href = "ArchitectViewProject.php?id=' . $row["id"] . '">' . $row["city"] . '<div>' . $row["det"] . '</div><br><meter style = "width: 100%;" value = "' . $row["prog"] . '"></meter></a></li>';
                            echo '<li class = "brk"></li>';
                        }
                    }
                    echo '</ul>';
                    echo '</td>';


                    $sql = "SELECT CONCAT (customer.fname , '_', customer.lname ) AS det  , project.city AS city , project.progress/100 as prog , project.id as id FROM project INNER JOIN customer ON project.customer_id=customer.id WHERE project.category='Community' AND project.progress!=100 AND project.architect_id='" . $_SESSION["id"] . "' AND project.status='Active' ORDER BY city ASC;";
                    $result = $conn->query($sql);

                    echo '<td valign="top">';
                    echo '<ul id="projlist">';
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {



                            echo '<li ><a id = "proj" href = "ArchitectViewProject.php?id=' . $row["id"] . '">' . $row["city"] . '<div>' . $row["det"] . '</div><br><meter style = "width: 100%;" value = "' . $row["prog"] . '"></meter></a></li>';
                            echo '<li class = "brk"></li>';
                        }
                    }
                    echo '</ul>';
                    echo '</td>';


                    $conn->close();
                    ?>
                </tr>
            </table>

        </div>

    </body>
</html> 