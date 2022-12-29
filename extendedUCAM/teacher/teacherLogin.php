<?php
    session_start();
?>

<!DOCTYPE html>
<html>
  <body> 
    <body style="background-color:Thistle;"></body>
    </br>   
    </br>
	<style>
		h1 {text-align: center;}
		h3 {text-align: center;}
		p {text-align: center;}
		div {text-align: center;}
	</style>
	
	<h1>Provide Information</h1>

<?php
	require('..\lib\db_connect.php');

	$con = mysqli_connect( HOST, USER, PASS , DB)
		or die("Can not connect");

    $teacher_id = '';
    $password = '';

    $invalid_credential = false;

    if( isset($_GET["teacher_id"]) )
    {
        $teacher_id = $_GET['teacher_id'];
        $password = $_GET['password'];

        $result = mysqli_query( $con, "SELECT * FROM teacher WHERE teacher_id = '$teacher_id' AND password = '$password'" );

        if(mysqli_num_rows($result) == 0)
        {
            $invalid_credential = true;
        } else {
            $_SESSION["teacher_id"] = $teacher_id;
            $_SESSION["password"] = $password;

            header("Location:teacherDashboard.php");
        }
    }
?>

<form method=post action="teacherDashboard.php">
<h3>
	Teacher ID : <input type=text name=teacher_id> <br>

	<p>

	Password : <input type=password name=password> <br>

	<p>

    <?php 
    if($invalid_credential){
        echo "<p style='color:red'>Invalid teacher id or password</p>";
    }
    ?>

	<h3><input type=submit value=Submit>
</h1>
</form>
<a href = 'teacherLogout.php'> Logout </a>

  </body>
</html>

