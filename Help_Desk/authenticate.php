<?php
    session_start();
    
	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

    $student_id = '';

    $logged_in_id = '';
    $logged_in_name = '';

    $logged_in_student_id = '';
    $password = '';
    $logged_in_role = '';

    $student_name = '';

    $logged_in = false;

    function goToLogin() {
        header("Location: login.php");
    }

    function goToTeacherLogin() {
        header("Location: teacher_login.php");
    }

    if( isset($_SESSION['student_id']) && isset($_SESSION['password']) )
    {
        $student_id = $_SESSION['student_id'];
        $password = $_SESSION['password'];

        $result = mysqli_query( $connect, "SELECT * FROM student WHERE student_id = '$student_id' AND password = '$password'" );

        if(mysqli_num_rows($result) > 0)
        {
            $logged_in = true;
            $logged_in_student_id = $student_id;
            extract(mysqli_fetch_array($result));
            $student_name = $name;
            $logged_in_id = $student_id;
            $logged_in_name = $student_name;
            $logged_in_role = "S";
        }
    }

    if( isset($_SESSION['teacher_id']) && isset($_SESSION['password']) )
    {
        $teacher_id = $_SESSION['teacher_id'];
        $password = $_SESSION['password'];

        $result = mysqli_query( $connect, "SELECT * FROM teacher_profile WHERE teacher_id = '$teacher_id' AND password = '$password'" );

        if(mysqli_num_rows($result) > 0)
        {
            $logged_in = true;
            $logged_in_teacher_id = $teacher_id;
            extract(mysqli_fetch_array($result));
            $logged_in_id = $teacher_id;
            $logged_in_name = $teacher_name;
            $logged_in_role = "T";
        }
    }

    if( isset($_SESSION['admin_id']) && isset($_SESSION['password']) )
    {
        $admin_id = $_SESSION['admin_id'];
        $password = $_SESSION['password'];

        $result = mysqli_query( $connect, "SELECT * FROM admin1 WHERE username = '$admin_id' AND password = '$password'" );

        if(mysqli_num_rows($result) > 0)
        {
            $logged_in = true;
            $logged_in_teacher_id = $admin_id;
            extract(mysqli_fetch_array($result));
            $logged_in_id = $admin_id;
            $logged_in_name = $admin_id;
            $logged_in_role = "A";
        }
    }
?>

<?php if ($logged_in) { ?>

<style>
body{
    font-family: 'Segoe UI';
    margin: 0;
    padding: 0;
}

.top-bar-login {
    line-height: 50px;
    text-align: center;
    background-color: orange;
    color : White;
    font-size: 20px;
    font-weight: 600;
}

.top-bar-login a{
    color: white;
}
</style>

<div class='top-bar-login'>
    <?php echo $logged_in_name ?>
    -
    <a href='logout.php'>
        Logout
    </a>
</div>

<?php } ?>