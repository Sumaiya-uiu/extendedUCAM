<?php 
    require_once('authenticate.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="register_course_section.css">
    </head>
<body style="background-color:white;">
    <div class="container">
    </br>   
    </br>
	

<?php

	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");
    
    $student_id_g = $_GET['id'];

	echo "<h2>Courses Taken By $student_id_g<h2>";
	
	$results = mysqli_query( $connect, 
        "SELECT * 
        FROM course_section 
        INNER JOIN student_course_section 
        ON course_section.course_id=student_course_section.course_id 
        Where student_id='$student_id_g' ; ")
		or die("Can not execute query");


	echo "<table border class='table'> \n";
	echo "<th>Course Id</th> <th>Course Code</th> <th>Section</th>\n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $course_id </td>";
		echo "<td> $course_code </td>";
		echo "<td> $section_name </td>";
	}

	echo "</table> \n";
?>
<div>
    <br/>
    <br/>
    <a href="teacher_notification.php">Back to notification panel</a>
</div>
</div>
</body>
</html>