<?php
// session_start();
// if (!isset($_SESSION['loggedin'])) {
// 	header('Location: ../loginform/index.html');
// 	exit;
// }
?>
<html>
	<head>
		<title>Added Elective course</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
    <body style=" background-image: url('Q1.jpg');background-repeat: no-repeat;background-size:cover;" >


<?php

	
	$course_code = $_GET["course_code"];
	$course_title = $_GET["course_title"];
	$credits = $_GET["credits"];
	$elective_group = $_GET["elective_group"];
	$offered_sem = $_GET["offered_sem"];
	$total_request = $_GET["total_req"];
	// $add_advising = $_GET["add_advising"];




	require_once('../lib/db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO electiveadmin VALUES ('', '$course_code', '$course_title', '$credits', '$elective_group', '$offered_sem', '$total_request')" )

		or die("Can not execute query");



	echo "<p style='margin-left:30px;margin-top:10px;font-size:25px;text-align:center;font-weight:1000;'> Record inserted:<br> Course code = $course_code <br> Course Title = $course_title <br> Credits = $credits <br><br> Elective Group = $elective_group <br><br> Offered Sem = $offered_sem <br><br> Total request = $total_request <br><br> </p>";


	echo "<p style='margin-left:30px;margin-top:10px;font-size:25px;text-align:center;font-weight:1000;'><a href=electiveadmin.php>READ ALL RECORDS</a></p>";

?>


</form>


</body>
</html>