<?php
    require_once ('../db/dbh.php');
    $counselling_id = $_GET['counselling_id'];
    $teacher_id = $_GET['teacher_id'];
    $startTime = $_POST['startTime'];
    $endTime = $_POST['endTime'];
    $counsellingDay = $_POST['day'];
    $counsellingDate = $_POST['date'];
    $course = $_POST['course'];
    $section = $_POST['section'];

    // $arr1 = explode(":",$startTime);
    // $arr2 = explode(":",$endTime);

    // if(arr1[0] > arr2[0] || )

    $query = "SELECT * FROM teacher_courses WHERE teacher_id=$teacher_id AND course_name='$course' AND section='$section';";
    $execute = mysqli_query($conn, $query);
    if($execute->num_rows>0){
        // database insert code need to write here
        $queryInsert = "INSERT INTO counselling_booking (teacher_id, counsellingDay, startTime, endTime, counsellingDate, course) 
        VALUES($teacher_id, '$counsellingDay', '$startTime', '$endTime', '$counsellingDate', '$course');";
        $create_query = mysqli_query($conn,$queryInsert);

        echo "
            <script type='text/javascript'>
                alert('Your Booking is successful')
                window.location = './bookingProcess.php?counselling_id={$counselling_id}&teacher_id={$teacher_id}';
            </script>
        ";
    }else{
        echo "
            <script type='text/javascript'>
                alert('Section or Course didn\'t \match')
                window.location = './bookingProcess.php?counselling_id={$counselling_id}&teacher_id={$teacher_id}';
            </script>
        ";
    }
?>