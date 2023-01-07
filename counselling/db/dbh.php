<?php
$servername = "localhost";
$dBUsername = "root";
$dbPassword = "";
$dBName = "extended_ucam";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Databese Connection Failed";
}else{
	// echo "Databese Connection Successful";
}
?>