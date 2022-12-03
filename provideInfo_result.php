<?php

	$student_id = $_GET["student_id"];

	$course_code = $_GET["course_code"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO helper VALUES ('$student_id', '$course_code' )" )

		or die("Can not execute query");


	
	echo "Record inserted:<br> student_id = $student_id <br> course_code = $course_code";



	echo "<p><a href=helpdeskinterface.php>Go to helper-desk</a>";

?>