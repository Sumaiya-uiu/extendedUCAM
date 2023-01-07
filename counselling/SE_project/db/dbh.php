<?php
$servername = "localhost";
$dBUsername = "root";
$dbPassword = "";
$dBName = "counselling_hour_booking";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Databese Connection Failed";
}else{
	// echo "Databese Connection Successful";
}
?>