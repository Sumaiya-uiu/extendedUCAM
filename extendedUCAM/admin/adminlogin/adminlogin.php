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
	require_once('C:\xampp\htdocs\UCAM\extendedUCAM\lib\db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

    $admin_id = '';
    $password = '';

    $invalid_credential = false;

    if( isset($_GET["admin_id"]) )
    {
        $admin_id = $_GET['admin_id'];
        $password = $_GET['password'];

        $result = mysqli_query( $connect, "SELECT * FROM admin WHERE admin_id = '$admin_id' AND password = '$password'" );

        if(!$result || mysqli_num_rows($result) == 0)
        {
            $invalid_credential = true;
        } else {
            $_SESSION["admin_id"] = $admin_id;
            $_SESSION["password"] = $password;

            header("Location: C:\xampp\htdocs\UCAM\extendedUCAM\Student\Dashboard\navbar.html");
        }
    }
?>

<form method=get action=adminlogin.php>
<h3>
	Admin ID : <input type=text name=admin_id> <br>

	<p>

	Password : <input type=password name=password> <br>

	<p>

    <?php 
    if($invalid_credential){
        echo "<p style='color:red'>Invalid admin id or password</p>";
    }
    ?>

	<h3><input type=submit value=Submit>
</h1>
</form>

  </body>
</html>

