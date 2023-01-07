<?php 
    require_once('authenticate.php');
?>
<!DOCTYPE html>
<html>
<body style="background-color:white;"></body>
    </br>   
    </br>
	
<script>
	const params = new URLSearchParams()
	params.set('imageurl', 'http://www.image.com/?username=unknown&password=unknown')
	return `http://www.foobar.com/foo?${params.toString()}`
</script>


<?php

	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	echo "<h2>Courses Taken By $logged_in_student_id<h2>";
	
	$results = mysqli_query( $connect, 
        "SELECT * 
        FROM course_section 
        INNER JOIN student_course_section 
        ON course_section.course_id=student_course_section.course_id 
        Where student_id='$logged_in_student_id' ; ")
		or die("Can not execute query");


	echo "<table border> \n";
	echo "<th>Course Id</th> <th>Course Code</th> <th>Section</th> <th>Action</th>\n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $course_id </td>";
		echo "<td> $course_code </td>";
		echo "<td> $section_name </td>";
		echo "<td><a href='register_course_result.php?course_id=".urldecode($course_id)."&request_type=".urldecode("drop")."&message=".urlencode("Student with $logged_in_student_id wants to drop course $course_code")."'>Drop</a></td>";
	}

	echo "</table> \n";
?>
<div>
    <a href="register_course.php">Register Course</a>
</div>
</body>
</html>