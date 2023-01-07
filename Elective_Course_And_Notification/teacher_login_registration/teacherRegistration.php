<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>Teacher Registration</title>
<link rel="stylesheet" href="" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body >
<?php
	require('../lib/db_connect.php');
		$con = mysqli_connect( HOST, USER, PASS , DB)
			or die("Can not connect");
	if (isset($_REQUEST['teacher_id'])){
		$teacher_id = stripslashes($_REQUEST['teacher_id']);
		$teacher_id = mysqli_real_escape_string($con,$teacher_id); 
		$name = stripslashes($_REQUEST['name']);
		$name = mysqli_real_escape_string($con,$name);
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$phone_no = stripslashes($_REQUEST['phone_no']);
		$phone_no = mysqli_real_escape_string($con,$phone_no);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

// 		if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
// 	exit('Email is not valid!');
// }

if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
	exit('Password must be between 5 and 20 characters long!');
}

		
if ($stmt = $con->prepare('SELECT id, password FROM teacher1 WHERE teacher_id = ?')) {
	$stmt->bind_param('s', $_POST['teacher_id']);
	$stmt->execute();
	$stmt->store_result();
	if ($stmt->num_rows > 0) {
		echo 'Teacher exists, please choose another!';
	} else {
if ($stmt = $con->prepare('INSERT INTO teacher1 (teacher_id,name, password) VALUES (?, ?, ?)')) {
	// $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$password= $_POST['password'];
	$stmt->bind_param("sssss" ,$_POST['teacher_id'], $_POST['name'], $password);
	$stmt->execute();
	echo 'You have successfully registered, you can now login!';
} else {
	echo 'Could not prepare statement!';
}

}
}
}
$con->close();
?>


<style type="text/css">
	body{
		background-color: #ffffff;
		font-family: 'Times New Roman', serif;
		color: #000000;
	}


	.btn-danger{
		color:#ffffff ;
		background-color: #ff5c0b;
	}
	.btn-danger:hover {
		color: #ffffff;
		border-color: #ff5c0b;
	}

	

</style>
	<div class="containter-fluid overflow-hidden ">
		<div class="row mt-3 ">
			<div class="card col-4 offset-lg-4 hero-card" style="background-color: #27bb88; color: #ffffff;">
				<h2 class="text-light display-3 d-flex justify-content-center fs-1">Teacher Registration</h2>
				<hr>

				<form action="" method="POST" enctype="multipart/form-data" class="form-group">
					<label for="teacherid">Admin ID</label>:
					<input class="form-control" type="text" id="teacherid" name="teacher_id" placeholder="Teacher ID" required>
					<br>
					<label for="name"> Name</label>:
					<input class="form-control" type="text" id="name" name="name" placeholder="Name" required>
					<br>
					<label for="email">Email</label>:
					<input class="form-control" type="Email" id="email" name="email" placeholder="Email" required>
					<br>
					<label for="phone">Phone Number</label>:
					<input class="form-control" type="text" id="phone" name="phone_no" placeholder="Phone number" required>
					<br>
					<label for="password">Password</label>:
					<input class="form-control" type="Password" id="password" name="password" placeholder="Password" required>
					<br>
					<input class="btn btn-danger col-2" style="background-image: linear-gradient(to left, #27bb88, #3179bd, #32b5be); font-weight: bolder;"type="submit" value="Submit">
					<br><br>
					<p><a href="indexTeacher.html" style="color:#ffffff;">Want to go back login page?</a></p>
				</form>

			</div>
		</div>
	</div>
</body>
</html>
