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
	echo "<h2>Information of the helper-student<h2>";
	
	$results = mysqli_query( $connect, "SELECT * FROM student INNER JOIN helper ON student.student_id=helper.student_id Where course_code='$course_code' ; " )
		or die("Can not execute query");



	echo "<table border> \n";
	echo "<th>Student Id</th> <th>Name</th> <th>Email</th> <th>Phone number</th> <th>Course code</th>\n";


	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $student_id </td>";
		echo "<td> $name </td>";
		echo "<td> $email </td>";
		echo "<td> $phone_no </td>";
		echo "<td> $course_code </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";

	echo "<p><a href=provideInfo_input.php>Provide Information</a>";
?>

</body>
</html>