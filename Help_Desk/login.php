<?php
    session_start();
?>

<!DOCTYPE html>
<html>
  <body> 
    <body style="background-color:White;"></body>
    </br>   
    </br>

	<style>
		h1 {text-align: center;}
		h3 {text-align: center;}
		p {text-align: center;}
		div {text-align: center;}
	</style>

    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav style="background-color: orange;width: auto;height: 80px;">
        <div style="color: white;text-align: center; font-size: 32px; font-weight: bold; padding-top: 20px;">Extended
            UCAM</div>

    </nav>
    <body style="background-color:white;"></body>
	
	<h1>Login</h1>

<?php
	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

    $student_id = '';
    $password = '';

    $invalid_credential = false;

    if( isset($_GET["student_id"]) )
    {
        $student_id = $_GET['student_id'];
        $password = $_GET['password'];

        $result = mysqli_query( $connect, "SELECT * FROM student WHERE student_id = '$student_id' AND password = '$password'" );

        if(mysqli_num_rows($result) == 0)
        {
            $invalid_credential = true;
        } else {
            $_SESSION["student_id"] = $student_id;
            $_SESSION["password"] = $password;

            header("Location: index.html");
        }
    }
?>

<form method=get action=login.php>
<h3>
	Student ID : <input type=text name=student_id> <br>

	<p>

	Password : <input type=password name=password> <br>

	<p>

    <?php 
    if($invalid_credential){
        echo "<p style='color:red'>Invalid student id or password</p>";
    }
    ?>

	<h3><input type=submit value=Submit>
</h1>
</form>

  </body>
</html>

