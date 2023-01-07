<?php 
    require_once('authenticate.php');
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="register_course_section.css">
</head>
<body style="background-color:White;"></body>
    </br>   
    </br>
	<div class="container">


<?php

	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$course_code = $_GET["course_code"];
	echo "<h2>Selected Courses<h2>";
	
	$results = mysqli_query( $connect, 
        "SELECT * 
        FROM course_section 
        INNER JOIN course_section_time 
        ON course_section.course_id=course_section_time.course_id 
        Where course_code='$course_code' ; " )
		or die("Can not execute query");

    echo "<div class='table'> \n";
	echo "<table border> \n";
	echo "<th>Course code</th> <th>section</th> <th>Starting Time</th> <th>Ending Time</th> <th>Day</th>\n";

    function getTimeFromFloat($floatTime) {
        $hour = round($floatTime);
        return $hour.":".(($floatTime - $hour)*100);
    }

    function getWeekDay($value) {
        $arr = ["Saturday", "Sunday", "Monday", "Tuestday", "Wednesday", "Thursday", "Friday"];
        return $arr[$value]; 
    }

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $course_code </td>";
		echo "<td> $section_name </td>";
		echo "<td> ".getTimeFromFloat($starting_time)." </td>";
		echo "<td> ".getTimeFromFloat($ending_time)." </td>";
		echo "<td> ".getWeekDay($day)." </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";
    echo "</div> \n";

	// echo "<p><a href=provideInfo_input.php>Select Section</a>";
?>

    <form method=get action=register_course_result.php>
        </br>
        <!-- <h4>Select Section</h4> -->
        

        <label for="Options">Select Section</label>
      </br>
        <select type="text" value="Select course" class="form-control" name ="section_name">
            <?php            
            $results = mysqli_query( $connect, 
            "SELECT * FROM course_section where course_code = '$course_code'" )
                or die("Can not execute query");

            while( $rows = mysqli_fetch_array( $results ) ) {
                extract( $rows );
                echo "<option name='option'>".$section_name."</option>";
            }
            ?>
            </select>

        <input type="hidden" name="course_code" value="<?php echo $course_code; ?>">
        <input type="submit" value="Select" />

    </form>
    </div>

</body>
</html>