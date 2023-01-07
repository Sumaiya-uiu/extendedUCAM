<?php	
	require_once('../lib/db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");
	$results = mysqli_query( $connect, "SELECT * FROM electiveadmin" )
		or die("Can not execute query");

?>