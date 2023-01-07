<?php
session_start();
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'extended_ucam';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if ( !isset($_POST['student_id'], $_POST['password']) ) {
	exit('Please fill both the student id and password fields!');
}
if ($stmt = $con->prepare('SELECT id, password FROM student1 WHERE student_id = ?')) {
	$stmt->bind_param('s',$_POST['student_id']);
	$stmt->execute();
	$stmt->store_result();

	if ($stmt->num_rows > 0) {
	$stmt->bind_result($student_id, $password);
	$stmt->fetch();
		if ($_POST['password'] === $password) {
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['id'] = $id;
		$_SESSION['student_id'] = $_POST['student_id'];

		$_SESSION['password'] = $_POST['$password'];
		$result = mysqli_query( $con, "INSERT INTO user(id,login_id,password) VALUES('',$student_id,$password)" );
		


		header('Location: ../Student/studentHome.php');
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