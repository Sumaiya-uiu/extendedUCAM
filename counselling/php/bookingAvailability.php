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

    $flag = 0;

    $start1 = explode(":", $startTime);
    $end1 = explode(":", $endTime);
    $quer = "SELECT * FROM teacherunavailable WHERE teacher_id=$teacher_id AND selectDate='$counsellingDate';";
    $exe = mysqli_query($conn, $quer);
    if($exe->num_rows>0){ 
        while($rd = mysqli_fetch_assoc($exe)){ 
            $start2 = explode(":", $rd['start_time']);
            $end2 = explode(":", $rd['end_time']);
            $date = $rd['selectDate'];
            if($start1[0] == $start2[0]){
                if($start1[1] == $start2[1]){
                    $flag = 1;
                }
            }
            if($end1[0] == $end2[0]){
                if($end1[1] == $end2[1]){
                    $flag = 1;
                }
            }
            // Write the condition here;
        }
    }



        

    // if(arr1[0] > arr2[0] || )

    $query = "SELECT * FROM teacher_courses WHERE teacher_id=$teacher_id AND course_name='$course' AND section='$section';";
    $execute = mysqli_query($conn, $query);
    if($flag == 1){
        echo "
            <script type='text/javascript'>
                alert('Teacher Is unavailable in this time.')
                window.location = './bookingProcess.php?counselling_id={$counselling_id}&teacher_id={$teacher_id}';
            </script>
        ";
    }else if($execute->num_rows>0){
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