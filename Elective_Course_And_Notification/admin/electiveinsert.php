<?php
// session_start();
// if (!isset($_SESSION['loggedin'])) {
// 	header('Location: ../loginform/index.html');
// 	exit;
// }
?>
<html>
	<head>
		<title>Elective course</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body style="font-family: arial;margin: auto; margin-left: 400px; margin-top: 200px;
  width: 50%;padding: 10px; background-image: url('R9.jpg');background-repeat: no-repeat;background-size:cover;" >

	<h1 style="color: white; margin-left: 120px; color: blue;">Insert course</h1>

<form class ="ui form" style="max-width: 500px; margin: 0 auto;" method=get action=electiveinserted.php>
   
 
	<span style="font-weight:700;">course_code:</span> <input type=text name="course_code"> <br>

	<p>
    <br>		

	<span style="font-weight: 700;">Course_title</span> <input type=text name="course_title"> <br>

	<p>
	<br>
		<span style="font-weight: 700;">credits</span> <input type=text name="credits"> <br>

	<p>
	<br>
		<span style="font-weight: 700;">elective_group</span> <input type=text name="elective_group"> <br>

	<p>
	<br>
		<span style="font-weight: 700;">offered_sem</span> <input type=text name="offered_sem"> <br>

	<p>
	<br>
			<span style="font-weight: 700;">total_req</span> <input type=text name="total_req"> <br>

	<p>
	<br>
	<!-- 		<span style="font-weight: 700;">add_advising</span> <input type=text name="add_advising"> <br>

	<p> -->
	<br>

    
	<button style="color:white;" class="ui blue button">ADD Course</button>

 

</form>

</body>
</html>