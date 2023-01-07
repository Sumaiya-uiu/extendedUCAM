<?php
include('../lib/db_connect.php');
$con = mysqli_connect( HOST, USER, PASS, DB )
or die("Can not connect");
session_start();
$uid=$_SESSION['UID'];
mysqli_query($con,"update messages set status=1 where to_id=$uid");
?>