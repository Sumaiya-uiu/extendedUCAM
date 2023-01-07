<?php 
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	require_once ('dbh.php');

	$sql1 = "SELECT * FROM `doctorinformation` where id = '$id'";
	$result1 = mysqli_query($conn, $sql1);

    //$sql2 = "SELECT * FROM `doctorappoinment` where doctorId = '$id'";
	//$result2 = mysqli_query($conn, $sql2);

    //if ($result2===false) {
        //echo mysql_error();
    //} 
    
    $userRow=mysqli_fetch_array($result1,MYSQLI_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Teacher</title>
    <!-- <link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\SE project\css\chooseteacher.css"> -->
</head>
<body>
    <div class="container">
        <h1>hello</h1>
        <?php
            
        ?>
    </div>
   
    
</body>
</html>