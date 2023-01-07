<?php
session_start();
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'learningextende_ucam';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if ( !isset($_POST['admin_id'], $_POST['password']) ) {
	exit('Please fill both the username and password fields!');
}
if ($stmt = $con->prepare('SELECT id, password FROM admin WHERE admin_id = ?')) {
// if ($stmt = $con->prepare('SELECT student_id, password FROM student WHERE student_id = ? and password= ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s',$_POST['admin_id']);
	$stmt->execute();
	$stmt->store_result();

	if ($stmt->num_rows > 0) {
	$stmt->bind_result($admin_id, $password);
	$stmt->fetch();
		if ($_POST['password'] === $password) {
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['admin_id'] = $_POST['admin_id'];
		$_SESSION['id'] = $id;
		$_SESSION['password'] = $_POST['$password'];
		$result = mysqli_query( $con, "INSERT INTO users(login_id,password) VALUES($admin_id,$password)" );
		


		header('Location: ../admin/adminhome.php');
	} else {
		echo 'Incorrect password!';
	}
} 
else {
	echo 'Incorrect username !';
}


	$stmt->close();
}
?>