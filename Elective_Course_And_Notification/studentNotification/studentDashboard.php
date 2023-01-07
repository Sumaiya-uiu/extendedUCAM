<?php   
    require_once('../lib/db_connect.php');
    $connect = mysqli_connect( HOST, USER, PASS, DB )
        or die("Can not connect");

    $results = mysqli_query( $connect, "SELECT student_id FROM student1" )
        or die("Can not execute query");


?>




<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: ../student_login_registration/indexStudent.html');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssStudent/nav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Student Home</title>
</head>

<body class="overflow-hidden" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <!-- Navabar Starts -->
    <div class="row mb-2">
        <div class="col-md-12 col-lg-12" style="padding:0;">
            <div class="head">
                <div class="Banner-Container">
                    <div class="floatLeft">
                        <a href="https://ucam.uiu.ac.bd"><img alt="Image" src="Elective/images/nav.gif"></a>

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
                            <a id="ctl00_lblLogout" class="logoutStyle" href="../student_login_registration/studentLogout.php">Logout</a>
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
                        <img src="Elective/images/UIU.png" alt="" width="50" height="30">
                    </a>
                    <a class="" href="studentHome.php"
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
                            <a class="nav-link active" href="Stdashboard.php">Co-ordinator</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="../Student/Elective/electivestudent.php">Elective
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

    <!-- Body container -->
<div class="container-fluid d-flex-row">
  <div class="row m-5">
    <div class="col">
     Student Info
    </div>
    <div class="col">
      <h1>Teacher Info</h1><hr>
      <form>
          <label><pre><?php

                                                                                    $results = mysqli_query( $connect, "SELECT teacher_id,name,email FROM teacher1 
                                                                                    limit 1" )
                                                                                    or die("Can not execute query");
                                                                                    while( $rows = mysqli_fetch_array( $results ) ) {
                                                                                    extract( $rows );
                                                                                    echo "<b>Teacher ID:</b> $teacher_id";
                                                                                    echo "<br>";
                                                                                    echo "<b>Teacher Name:</b> $name";
                                                                                    echo "<br>";

                                                                                    echo "<b>Teacher Email:</b> $email";
                                                                                                        } 
                                                                                     ?></pre></label>
            <a href="contactmentor.php">Contact Mentor</a> 
      </form>
    </div>
  </div>
</div>

    <!-- Body Container Ends -->


<a href="../student_login_registration/studentLogout.php"></a>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>