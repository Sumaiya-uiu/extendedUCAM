<?php
<?php
    session_start();
    
	require_once('../lib/db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

    $teacher_id = '';
    $logged_in_teacher_id = '';
    $password = '';
    $teacher_name = '';

    $logged_in = false;

    function goToLogin() {
        header("Location: login.php");
    }

    if( isset($_SESSION['teacher_id']) && isset($_SESSION['password']) )
    {
        $teacher_id = $_SESSION['teacher_id'];
        $password = $_SESSION['password'];

        $result = mysqli_query( $connect, "SELECT * FROM teacher WHERE teacher_id = '$teacher_id' AND password = '$password'" );

        if(mysqli_num_rows($result) > 0)
        {
            $logged_in = true;
            $logged_in_teacher_id = $teacher_id;
            extract(mysqli_fetch_array($result));
            $teacher_name = $name;
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
    <?php echo $teacher_name ?>
    -
    <a href='teacherLogout.php'>
        Logout
    </a>
</div>

<?php } ?>