<?php
    session_start();
    
	require_once('../../lib/db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

    $student_id = '';
    $logged_in_student_id = '';
    $password = '';
    $student_name = '';

    $logged_in = false;

    function goToLogin() {
        header("Location: login.php");
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
    background-color: black;
    color : White;
    font-size: 16px;
    font-weight: 600;
}

.top-bar-login a{
    color: white;
}
</style>

<div class='top-bar-login'>
    <?php echo $student_name ?>
    -
    <a href='logout.php'>
        Logout
    </a>
</div>

<?php } ?>