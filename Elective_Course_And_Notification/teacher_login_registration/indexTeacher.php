<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Teacher Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="login">
			<h1>Teacher Login</h1>
			<form action="teacherAuthenticate.php" method="post">
					<form action="" method="post">
				<input type="hidden" name="id" placeholder="ID" id="ID" required>
				<label for="Teacher_id">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="teacher_id" placeholder="Teacher ID" id="tID" required>
				<label for="password"> 
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<input type="submit" value="Login">
				<span><?php $msg ?></span>
			</form>
			<a href="teacherRegistration.php" style="color:black; font-size:larger;">Don't have account?Want to register....</a>
		</div>
	</body>
</html>