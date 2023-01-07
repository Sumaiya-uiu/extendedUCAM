<?php   
    require_once('../lib/db_connect.php');
    $connect = mysqli_connect( HOST, USER, PASS, DB )
        or die("Can not connect");

    $results = mysqli_query( $connect, "SELECT teacher_id FROM teacher1" )
        or die("Can not execute query");


?>




<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: ../teacher_login_registration/indexTeacher.html');
    exit;
}
?>





<!DOCTYPE html>
	<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" type="text/css" href="navbar.css">
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
	        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	    <title>Teacher</title>
	</head>
	<style type="text/css">
	    .nav-item {
	    font-weight: bold;
	}
	.nav-item > a:hover, .nav-item > a:active {
	    font-family: Georgia;
	}
	.logoutStyle {
    cursor: pointer;
    display: inline-block;
    width: 60px;
    height: 25px;
    text-align: center;
    padding: 3px 5px 2px 5px;
    color: #f6f1ef;
    text-decoration: none;
    font-size: 13px;
    font-weight: 600;
    margin-top: 5px;
    background-color: #f2531c;
    border-radius: 3px;
}
	</style>
	<body class="overflow-hidden" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">

	    <div class="row">

	        <nav class="navbar navbar-expand-lg navbar-light p-3" style="background-color: #e3f2fd;">
	            <div class="container-fluid ">

	                <div>
	                    <a class="navbar-brand ms-2" href="https://ucam.uiu.ac.bd">
	                        <img src="../lib/images/UIU.png" alt="" width="50" height="30">
	                    </a>
	                    <a class="" href="teacherDashboard.php"
	                        style="text-decoration: none;color: black;font-weight: bolder;">Home</a>

	                </div>

	                <div class="collapse navbar-collapse" id="navbarSupportedContent">
	                    <ul class="navbar-nav  position-absolute bottom-0 end-0 mt-2 me-3 mb-3 ">
	                        <li class="nav-item">
	                            <a class="nav-link active" href="#">Assigned Students</a>
	                        </li>
	                        <li class="nav-item">
	                            <a class="nav-link active" href="#">Make-up</a>
	                        </li>
	                        <li class="nav-item">
	                            <a class="nav-link active" href="#">Counselling</a>
	                        </li>
	                        <li class="nav-item me-2">
	                            <!-- <a class="nav-link active" href="#"> Advising Queries <span class="position-absolute top-5 start-90 translate-middle badge border border-light rounded-circle bg-danger p-2"><span class="visually-hidden">unread messages</span></span></a> -->
								<a class="nav-link active" href="dashboard.php">Advising Queries</a>
	                        </li>
							<li>
								<a id="ctl00_lbtnUserName" class="loginStyle" href="#"> <?php echo $_SESSION['teacher_id']; ?> </a>
						                            
						        <span id="ctl00_lblSeparate">/</span>
								<a  class="logoutStyle" href="../teacher_login_registration/teacherLogout.php">Logout</a>
							</li>
	                    </ul>
	                </div>
	            </div>
	        </nav>

	    </div>

	    <h1 class="shadow-lg p-3 mb-5 bg-body rounded text-center" style="margin: 220px;">Welcome to Teacher portal!</h1>

	<!--end of Navigation bar-->

	

	</body>
	</html>