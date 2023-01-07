<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: ../../student_login_registration/indexStudent.html');
    exit;
}
?>


<!DOCTYPE html>
	<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" type="text/css" href="navbar.css">
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
	        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	    <title>Student Elective course</title>
	</head>
	<style type="text/css">
	    .nav-item {
	    font-weight: bold;
	}
	.nav-item > a:hover, .nav-item > a:active {
	    font-family: Georgia;
	}
	</style>
	<body class="overflow-hidden" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
	    <!-- Navabar Starts -->
    <div class="row mb-2">
        <div class="col-md-12 col-lg-12" style="padding:0;">
            <div class="head">
                <div class="Banner-Container">
                    <div class="floatLeft">
                        <a href="https://ucam.uiu.ac.bd"><img alt="Image" src="images/nav.gif"></a>

                    </div>
                    <div class="floatRight loginStatusPanel">
                        <div style="border: 0px solid; display: inline-block;">
                            <div>
                                <label class="semesterStatusLabel">Current→</label>
                                <span id="ctl00_lblCurrent" class="semesterStatus">223 - Fall 2022 (Semester), 223 -
                                    Fall 2022 (Trimester)</span>
                            </div>
                            <div>
                                <label class="semesterStatusLabel">Registration→</label>
                                <span id="ctl00_lblRegistration" class="semesterStatus">223 - Fall 2022 (Semester), 231
                                    - Spring 2023 (Trimester)</span>
                            </div>
                        </div>
                        <div class="StatusPanel">
                            <a id="ctl00_lbtnUserName" class="loginStyle" href="#"> <?php echo $_SESSION['student_id']; ?> </a>
                            
                            <span id="ctl00_lblSeparate">/</span>
                            <a id="ctl00_lblLogout" class="logoutStyle" href="../../student_login_registration/studentLogout.php">Logout</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

     <div class="row">

        <nav class="navbar navbar-expand-lg navbar-light p-3" style="background-color: #e3f2fd;">
            <div class="container-fluid ">

                <div>
                    <a class="navbar-brand ms-2" href="https://ucam.uiu.ac.bd">
                        <img src="images/UIU.png" alt="" width="50" height="30">
                    </a>
                    <a class="" href="../studentHome.php"
                        style="text-decoration: none;color: black;font-weight: bolder;">Home</a>

                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  position-absolute bottom-0 end-0 mt-2 me-3 mb-3 ">
                        <!-- me-auto mb-2 mb-lg-0 nav  -->
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Registration</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Make-up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Counselling</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Co-ordinator</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="electivestudent.php">Elective
                                Course</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Documents</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Help Desk</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
    <!-- Navbar ends -->
	    
	<!--end of Navigation bar-->
	<div class="m-5">

<?php	
	require_once('../../lib/db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");
	$results = mysqli_query( $connect, "SELECT * FROM electiveadmin" )
		or die("Can not execute query");
        $studentID=$_SESSION['id'];
        // $_SESSION['id'] = $id;
        

 // if add button is clicked
 $count=0;
    if(isset($_POST["add"])){

            $courseID = $_POST['courseID'];
            
            for($i=0;$i<5;$i++){

            $count=$count+1;
            }
            $query = "UPDATE electiveadmin set total_request=$count where id=$courseID  ";
            mysqli_query( $connect, $query);
        }

        
   
            // $query = "INSERT INTO courserequest(student, admin) VALUES($sid, $courseID)";

    


echo "<table class='table table-bordered '>";
echo "<br>";
echo "<thead> <tr> <th>SL</th> <th>Code</th> <th>Title</th> <th>Credits</th> <th>Group</th><th>Offered Trimester</th> <th>Total request</th><th>Add </th></tr> </thead> <tbody>\n";


	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
        $query = "SELECT COUNT(*) AS C FROM courserequest WHERE student=$id";
        // echo $query;
        $count_res = mysqli_query( $connect, $query );
         $req_count = $count_res->fetch_row()[0];

        ?>
		<tr>
		<td> <?php  echo $id ?> </td>
		<td> <?php  echo $course_code ?> </td>
		<td> <?php  echo $course_title ?> </td>
		<td> <?php  echo $credits ?> </td>
		<td> <?php  echo $elective_group ?> </td>
		<td> <?php  echo $offered_sem ?> </td>
		<td id='total'> <?php echo $total_request ?></td>
        
        <td>
        <form method=post action=''> 
            <input type=text name="courseID" value=<?php echo $id?> hidden>
            <button type='submit' name='add'> Add </button>
        </form>
        <!-- <a href="javascript:void(0)" class="btn btn-info">Add</a> -->

        </td>
		</tr> 

        <?php
	}

	echo "</table> \n";
	echo "<br>";

?>
</div>


	</body>
	</html>




