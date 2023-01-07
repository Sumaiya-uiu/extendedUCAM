<?php 
    require_once('authenticate.php');
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            text-align : center;
        }
        .notifications{
            width: 70%;
            margin: auto;
        }

        .notification {
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>

<?php

    if($logged_in_role !== "A") {
        goToTeacherLogin();
    }

    if(isset($_GET['notification_id'])) {
        $notification_id_g = $_GET['notification_id'];
        $action_g = $_GET['action'];

        if ($action_g === "A")
        {
            $result = mysqli_query( $connect, "SELECT * FROM teacher_notification WHERE notification_id = $notification_id_g" );
            extract(mysqli_fetch_array($result));
            if($action === "add")
            {
                mysqli_query( $connect, "INSERT INTO student_course_section VALUES(null, '$student_id', $course_id)" );
            }else if($action === "drop"){
                mysqli_query( $connect, "DELETE FROM student_course_section 
                        WHERE student_id = '$student_id' AND
                        course_id = $course_id" );
            }else if($action === "change"){
                mysqli_query( $connect, "DELETE FROM student_course_section 
                    WHERE student_id = '$student_id'
                    course_id = $course_id"
                );
            }
        }
        mysqli_query( $connect, "DELETE FROM teacher_notification 
            WHERE notification_id = $notification_id_g" );
    }
?>

<body>
    <h1>Notification Panel</h1>
    <div class="notifications">
        <?php
        $results = mysqli_query( $connect, 
            "SELECT * 
            FROM teacher_notification WHERE stage LIKE '%admin%'") 
            or die("Can not execute query");


        while( $rows = mysqli_fetch_array( $results ) ) {
            extract( $rows );
        ?>
        <div class="notification">
            <div class="message">
                <?php echo $message; ?>
            </div>
            <div><a href="courses_by_student.php?id=<?php echo $student_id; ?>">View Student's all courses</a></div>
            <a href="?notification_id=<?php echo $notification_id; ?>&action=A">Approve</a> | 
            <a href="?notification_id=<?php echo $notification_id; ?>&action=R">Reject</a>
        </div>
<?php
    }
?>
    </div>
</body>
</html>