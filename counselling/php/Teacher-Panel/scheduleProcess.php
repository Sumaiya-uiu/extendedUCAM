<?php
    require_once ('../../db/dbh.php');
    $teacher_id = $_GET['teacher_id'];
    $startTime = $_POST['startTime'];
    $endTime = $_POST['endTime'];
    $selectDate = $_POST['selectDate'];

    $queryInsert = "INSERT INTO teacherUnavailable (teacher_id, start_time, end_time, selectDate) VALUES($teacher_id, '$startTime', '$endTime', '$selectDate');";
    $create_query = mysqli_query($conn, $queryInsert);

    if($create_query){
        echo "
        <script type='text/javascript'>
            alert('Your Schedule Updated')
            window.location = './schedule.php';
        </script>";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Some error occur. Please try again!')
            window.location = './schedule.php';
        </script>";
    }
?>