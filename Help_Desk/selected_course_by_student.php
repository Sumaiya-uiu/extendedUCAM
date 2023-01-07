<!DOCTYPE html>
<html>
<body style="background-color:LavenderBlush;"></body>
    </br>   
    </br>
	



<?php

	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$course_code = $_GET["course_code"];
	echo "<h2>Course_selection<h2>";
	
	$results = mysqli_query( $connect, "SELECT * FROM student INNER JOIN helper ON student.student_id=helper.student_id Where course_code='$course_code' ; " )
		or die("Can not execute query");



	echo "<table border> \n";
	echo "<th>Course code</th> <th>Course name</th> <th>Section</th> <th>Time</th> \n";


	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $course_code </td>";
		echo "<td> $course_name </td>";
		echo "<td> $Section </td>";
		echo "<td> $Time </td>";


		echo "</tr> \n";
	}

	echo "</table> \n";

	echo "<p><a href=course_selection.php>Select more course</a>";
?>

</body>
</html>