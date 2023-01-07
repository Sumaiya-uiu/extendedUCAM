<?php
    require_once('authenticate.php');

    if (!$logged_in) {
        goToLogin();
    }
?>

<style>
    body {
        text-align: center;
    }
    .padding {
        padding-top: 50px;
    }
    .error {
        color: red;
        font-weight: bold;
    }
</style>
<div class="padding"></div>


<?php
    if(isset($_GET['course_id'])) {
        $course_id_g = $_GET['course_id'];
        $action_g = $_GET['request_type'];
        $message_g = $_GET['message'];
        $stage_g = "";

        if(isset($_GET['stage'])){
            $stage_g = $_GET['stage'];
        }

        $connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

        mysqli_query( $connect, 
        "INSERT INTO teacher_notification VALUES(null, '$logged_in_student_id', '$course_id_g', '$action_g', '$message_g', '$stage_g')" );
        
        echo '<div>Your request has been sent for approval.</div>';
        echo '<div><a href = "registered_courses.php">View all registered courses</a></div>';
        exit();
    }
?>


<?php
    $course_id_g = '';
    $section_name_g = $_GET['section_name'];
    $course_code_g = $_GET['course_code'];
    $students_taken_courses_g = array();
    $required_approval_g = false;

    $error_same_course = false;
    $error_prerequisite = false;
    $error_time_conflict = false;
    $error_capacity = false;
    $request_message = '';

    $should_insert = true;

    $stage = "";

	require_once('db_connect.php');
    
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

    $result = mysqli_query( $connect, 
        "SELECT required_approval 
        FROM course WHERE course_code='$course_code_g'" );
    extract(mysqli_fetch_array($result));
    $required_approval_g = $required_approval;

    $result = mysqli_query( $connect, 
        "SELECT course_id 
        FROM course_section WHERE course_code='$course_code_g' 
        AND section_name = '$section_name_g'" );

    extract(mysqli_fetch_array($result));
    $course_id_g = $course_id;

    $result = mysqli_query( $connect, 
            "SELECT (SELECT count(*) FROM student_course_section WHERE course_id = $course_id_g) < 
            (SELECT COALESCE(capacity, 1000) from course_section WHERE course_id = $course_id_g) as has_capacity");

    extract(mysqli_fetch_array($result));

    $error_capacity = ($has_capacity == 0);

    $result = mysqli_query( $connect, 
        "SELECT * 
        FROM student_course_section INNER JOIN course_section
        ON student_course_section.course_id = course_section.course_id
        WHERE student_id='$logged_in_student_id'" );
    

	while( $rows = mysqli_fetch_array( $result ) ) {
		extract( $rows );
        array_push($students_taken_courses_g, $course_code);
	}

    echo $course_code_g." - ".count($students_taken_courses_g)."<br/>";

    if (in_array($course_code_g, $students_taken_courses_g)){
        echo "<div class='error'>You can not take the same course again!</div>";
        $should_insert = false;
        $error_same_course = true;
    }

    $result = mysqli_query( $connect, 
        "SELECT prerequisite_course_code 
        FROM course_prerequisite WHERE course_code='$course_code_g'" );

    while( $rows = mysqli_fetch_array( $result ) ) {
        extract( $rows );
        if( !in_array($prerequisite_course_code, $students_taken_courses_g))
        {
            echo "<div class='error'>Sorry. You must complete prerequisite: $prerequisite_course_code</div>";
            $request_message = "Student with id $logged_in_student_id wants to take course $course_code_g without taking prerequisite $prerequisite_course_code";
            $should_insert = false;
            $error_prerequisite = true;
        }
    }

    $result = mysqli_query( $connect, 
        "SELECT * 
        FROM student_course_section INNER JOIN
        course_section_time 
        ON student_course_section.course_id = course_section_time.course_id
        WHERE student_id='$logged_in_student_id'");
    
    class Course_Time {
        public $starting_time;
        public $ending_time;
        public $day;
        public $course_id;
    }

    $occupied_time = array();
    while( $rows = mysqli_fetch_array( $result ) ) {
        extract( $rows );
        $obj = new Course_Time();
        $obj->starting_time = $starting_time;
        $obj->ending_time = $ending_time;
        $obj->day = $day;
        $obj->course_id = $course_id;

        array_push($occupied_time, $obj);
    }

    $result = mysqli_query( $connect, 
        "SELECT * 
        FROM course_section_time
        WHERE course_id='$course_id_g'");  

    while( $rows = mysqli_fetch_array( $result ) ) {
        extract( $rows );

        foreach ($occupied_time as $taken_time) {
            if ($day == $taken_time->day && $starting_time == $taken_time->starting_time
            && $ending_time == $taken_time->ending_time 
            && $taken_time->course_id != $course_id_g)
            {
                $should_insert = false;
                $error_time_conflict = true;
                echo "<div class='error'>Sorry. This has time conflict with course id: $taken_time->course_id";
            }
        }
    }

    if($required_approval_g) {
        $should_insert = false;
    }

    if($error_capacity) {
        $should_insert = false;
    }

    if($should_insert) {
        $result = mysqli_query( $connect, 
        "INSERT INTO student_course_section VALUES(NULL, '$logged_in_student_id', $course_id_g)");
        echo "<div class='success'>Course Registered Successfully</div>";
    }
?>

<?php
    $should_send_request = false;
    if($error_prerequisite && !$error_same_course && !$error_time_conflict) {
        $should_send_request = true;
        echo "<div>Or, do you want to send a request to you teacher to ask for approval?</div>";
    }
    if(!$error_prerequisite && $error_same_course && !$error_time_conflict) {
        $should_send_request = true;
        echo "<div>Or, Do you want to change section?</div>";
        $request_message = "Student with id $logged_in_student_id wants to change section for course $course_code_g to section $section_name_g";
    }

    if($required_approval_g) {
        $should_send_request = true;
        $request_message = "Student $logged_in_student_id wants to take course $course_code_g";
        echo "<div>You need approval to take this course. </div>";
    }

    if($error_capacity) {
        $should_send_request = true;
        $request_message = "Student $logged_in_student_id wants to take course $course_code_g even though exceeding capacity";
        echo "<div>The course has reached its maximum capacity. <br/>You need approval to take this course. </div>";
        $stage = "teacher";
    }
?>

<?php 
    if($should_send_request){
?>
<form method="get">
    <input type="hidden" name="course_id" value="<?php echo $course_id_g; ?>"/>
    <input type="hidden" name="request_type" value="<?php echo "add"; ?>"/>
    <input type="hidden" name="message" value="<?php echo "$request_message"; ?>"/>
    <input type="hidden" name="stage" value="<?php echo "$stage"; ?>"/>
    <input type="submit" value="Ask for approval"/>
</form>
<?php
}
?>
<div>
    <a href = "registered_courses.php">View all registered courses</a>
</div>
