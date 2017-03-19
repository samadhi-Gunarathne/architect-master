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
            <li><a id="editItem" href="ArchitectOnGoingProjects.php">On Going Projects</a></li>
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

        <div style="margin-left:300px">

            <br><br>
            <form>
               <!--Right Column-->
               <div class="row">
		<div class="col m12">
			<!--Profile-->
			<div class="card-2 round white">
                <div class="col m4">
				<div class="container">
					<h4>Profile</h4>
					<p><img src="profcss/prof.jpg" class="circle" style="height:106px;width:106px" alt="Profile"></p>
					</div>
				</div>
			</div>
			<br><br>
                <div class="col m8">        
                        <div style="text-align: left;">
                            <div style="display:inline-block;">
                                First name:<br>
                                <input type="text" size="15" name="firstname" value="" disabled>
                            </div>
                            <div style="display:inline-block;">
                                Middle name:<br>
                                <input type="text" size="15" name="middlename" value="" disabled>
                            </div>
                            <div style="display:inline-block;">
                                Last name:<br>
                                <input type="text" size="15" name="lastname" value="" disabled>
                            </div>
                        </div>  
                        <br>
                        <div style="text-align: left;">
                            <div style="display:inline-block;">
                                Age:<br><input type="text" name="age" size="4" value="" disabled>
                            </div>
                            <div style="display:inline-block;">
                                NIC:<br><input type="text" name="nic" size="15" value="" disabled>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col m12">
                    <div class="col m4">
                        <br><br><br>
                        Address:<br>
                        <div style=" padding-left: 2em;">
                        No:
                        <br>
                        <input type="text" size="10" name="no" value="" disabled>
                        <br>
                        Street:
                        <br>
                        <input type="text" name="street" value="" disabled>
                        <br>
                        City:
                        <br>
                        <input type="text" name="city" value="" disabled>
                        </div>
                    </div>
                    Google Location:
                        <br>
                        <input type="text" name="location" size="50">
                        <br><br>
                        <div >
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.5643649597737!2d79.89346104990712!3d7.060361918623994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2f737b5b05a09%3A0xd4ef00d25a3b354a!2sK+Zone+Ja-Ela!5e0!3m2!1sen!2slk!4v1471279498706" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                        </div>
                    <div class="col m8">
                            <br><br><br>
                            Email:<br>
                            <div style="text-align: left;">
                                <input type="text" name="email" size="35" value="" disabled>
                                <br><br>
                            </div>
                            <div style="text-align: left;">
                                <div style="display:inline-block;">
                                    Mobile No:
                                    <br>
                                    <input type="text" name="mobile" size="10" value="" disabled>
                                </div>
                                <div style="display:inline-block;">
                                    Land No:
                                    <br>
                                    <input type="text" name="land" size="10" value="" disabled>
                                </div>
                            </div>
                            Account created date:<br>
                            <div style="text-align: left;">
                                <input type="date" name="created" value="" disabled>
                            </div>
                            <br><br>
                <br><br>
                Status:
                <select name="cars">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
                <br><br>
                User Name:
                <br>
                <input type="text" name="uname" size="15">
                <br><br>
                <div style="text-align: left;">
                    <div style="display:inline-block;">
                        New Password:
                        <br>
                        <input type="password" name="pass" size="25">
                    </div>
                    <div style="display:inline-block;">
                        Retype New Password:
                        <br>
                        <input type="password" name="retypepass" size="25">
                    </div>
                </div>  
                <br>
                        
                        
                    </div>
                </div>
                </div>
                
            </form>


                
                <div style="text-align: center;">
                    <button class="btn btn-primary dropdown-toggle theme-l1 left-align" type="button"><i class="fa fa-circle-o-notch fa-fw margin-right"></i>Reset all Fields
                </button>
                    <button class="btn btn-primary dropdown-toggle theme-l1 left-align" type="button"><i class="fa fa-circle-o-notch fa-fw margin-right"></i>Save
                </button>
                </div>
                <br><br>
            </form>
        </div>

    </body>
</html> 