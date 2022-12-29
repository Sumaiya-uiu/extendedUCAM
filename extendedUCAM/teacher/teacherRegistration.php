<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="" />
</head>
<body>
<?php
require('../lib/db_connect.php');
	$con = mysqli_connect( HOST, USER, PASS , DB)
		or die("Can not connect");
// If form submitted, insert values into the database.
if (isset($_REQUEST['teacher_id'])){
        // removes backslashes
	$teacher_id = stripslashes($_REQUEST['teacher_id']);
        //escapes special characters in a string
	$teacher_id = mysqli_real_escape_string($con,$teacher_id); 
	$name = stripslashes($_REQUEST['name']);
	$name = mysqli_real_escape_string($con,$name);
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$phone_no = stripslashes($_REQUEST['phone_no']);
	$phone_no = mysqli_real_escape_string($con,$phone_no);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
        $query = "INSERT into teacher (teacher_id, name, email, phone_no,password)
VALUES ('$teacher_id', '$name', '$email', '$phone_no','".md5($password)."')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='teacherLogin.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="teacher_id" placeholder="Teacher ID" required />
<input type="text" name="name" placeholder="Give your Name" required />
<input type="email" name="email" placeholder="Email" required />
<input type="text" name="phone_no" placeholder="Phone Number" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
</body>
</html>
