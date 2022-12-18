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
	$student_id = $_GET["student_id"];
	echo "<h2>Information of the helper-student<h2>";
	
	$results = mysqli_query( $connect, "SELECT * FROM course INNER JOIN completed_course ON course.course_code=completed_course.course_code= Where student_id='$student_id' ; " )
		or die("Can not execute query");



	echo "<table border> \n";
	echo "<th>Course code</th> <th>Course name</th> \n";


	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $course_code </td>";
		echo "<td> $course_name </td>";

		echo "</tr> \n";
	}

	echo "</table> \n";

	echo "<p><a href=provideInfo_input.php>Provide Information</a>";
?>

</body>
</html>