<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body >
<?php
	require('../../lib/db_connect.php');
		$con = mysqli_connect( HOST, USER, PASS , DB)
			or die("Can not connect");
	// If form submitted, insert values into the database.
	if (isset($_REQUEST['admin_id'])){
	        // removes backslashes
		$admin_id = stripslashes($_REQUEST['admin_id']);
	        //escapes special characters in a string
		$admin_id = mysqli_real_escape_string($con,$admin_id); 
		$name = stripslashes($_REQUEST['name']);
		$name = mysqli_real_escape_string($con,$name);
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$phone_no = stripslashes($_REQUEST['phone_no']);
		$phone_no = mysqli_real_escape_string($con,$phone_no);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	exit('Email is not valid!');
}

if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
	exit('Password must be between 5 and 20 characters long!');
}

		// We need to check if the account with that username exists.
if ($stmt = $con->prepare('SELECT id, password FROM admin WHERE admin_id = ? or email=?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
	$stmt->bind_param('ss', $_POST['admin_id'],$_POST['email']);
	$stmt->execute();
	$stmt->store_result();
	// Store the result so we can check if the account exists in the database.
	if ($stmt->num_rows > 0) {
		// Username already exists
		echo 'Admin exists, please choose another!';
	} else {
		// Insert new account
// Username doesnt exists, insert new account
if ($stmt = $con->prepare('INSERT INTO admin (admin_id,name,email,phone_no, password) VALUES (?, ?, ?, ?, ?)')) {
	// We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$stmt->bind_param("sssss" ,$_POST['admin_id'], $_POST['name'], $_POST['email'], $_POST['phone_no'], $password);
	$stmt->execute();
	echo 'You have successfully registered, you can now login!';
} else {
	// Something is wrong with the sql statement, check to make sure accounts table exists with all 5 fields.
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
			<div class="card col-4 offset-lg-4 hero-card" style="background-color: #6f1f3a; color: #ffffff;">
				<h2 class="text-light display-3 d-flex justify-content-center fs-1">Admin Registration</h2>
				<hr>

				<form action="" method="POST" enctype="multipart/form-data" class="form-group">
					<label for="adminid">Admin ID</label>:
					<input class="form-control" type="text" id="adminid" name="admin_id" placeholder="Admin ID" required>
					<br>
					<label for="name"> Name</label>:
					<input class="form-control" type="text" id="name" name="name" placeholder="Institute Name" required>
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
					<input class="btn btn-danger col-2" type="submit" value="Submit">
					<br><br>
					<p><a href="adminlogin.php" style="color:#ffffff;">Want to go back login page?</a></p>
				</form>

			</div>
		</div>
	</div>
</body>
</html>
