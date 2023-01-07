<?php
// session_start();
// if (!isset($_SESSION['loggedin'])) {
// 	header('Location: ../Admin_login_registration/index.html');
// 	exit;
// }
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
	    <title>Admin</title>
	</head>
	<style type="text/css">
	    .nav-item {
	    font-weight: bold;
	}
	.nav-item > a:hover, .nav-item > a:active {
	    font-family: Georgia;
	}
	</style>
	<body class="overflow-hidden" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
<!-- navbar start -->
	    <div class="row">

	        <nav class="navbar navbar-expand-lg navbar-light p-3" style="background-color: #e3f2fd;">
	            <div class="container-fluid ">

	                <div>
	                    <a class="navbar-brand ms-2" href="https://ucam.uiu.ac.bd">
	                        <img src="../lib/images/UIU.png" alt="" width="50" height="30">
	                    </a>
	                    <a class="" href="adminhome.php"
	                        style="text-decoration: none;color: black;font-weight: bolder;">Admin Home</a>

	                </div>



	                <div class="collapse navbar-collapse" id="navbarSupportedContent">
	                    <ul class="navbar-nav  position-absolute bottom-0 end-0 mt-2 me-3 mb-3 ">
	                        <li class="nav-item">
	                            <a class="nav-link active" href="#">Registration</a>
	                        </li>
	                        <li class="nav-item">
	                            <a class="nav-link active" href="#">Make-up</a>
	                        </li>
	                        <li class="nav-item">
	                            <a class="nav-link active" href="#">Counselling</a>
	                        </li>
	                        <li class="nav-item">
	                            <a class="nav-link active" href="#">Co-ordinator</a>
	                        </li>
	                        <li class="nav-item">
	                            <a class="nav-link" href="#">Elective
	                                Course</a>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	        </nav>
	        <hr>

	    </div>
	    
	<!--end of Navigation bar-->
	<div class="ms-2 me-2">
<?php	
	require_once('../lib/db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");
	$results = mysqli_query( $connect, "SELECT * FROM electiveadmin" )
		or die("Can not execute query");


echo "<table class='table table-bordered m-5 me-3'>";
echo "<br>";
echo "<thead> <tr> <th>SL</th> <th>Code</th> <th>Title</th> <th>Credits</th> <th>Group</th><th>Offered Trimester</th> <th>Total request</th>  <th></th> </tr> </thead> <tbody>\n";
	while( $rows = mysqli_fetch_array( $results ) ) {

		extract( $rows );
		echo "<tr>";
		echo "<td> $id </td>";
		echo "<td> $course_code </td>";
		echo "<td> $course_title </td>";
		echo "<td> $credits </td>";
		echo "<td> $elective_group </td>";
		echo "<td> $offered_sem </td>";
		echo "<td> $total_request</td>";
		echo "</tr> \n";
	}


	echo "</table> \n";

	echo "<br><p><a href=electiveinsert.php><button class='ui blue button'>ADD Course to preadvising</button></a></p>";

?>
</div>

	</body>
	</html>




