<html>
	<head>
		<title>COMPANY LIST</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body style="font-family: arial;margin: auto; margin-right: 250px; margin-top: 15px;
  width: 50%;padding: 10px; background-image: url('R8.jpg');background-repeat: no-repeat;background-size:cover;" >
  <a href="http://localhost/Final_Presentation/homepage/home.php">..Back</a>
	

		<h1 style="color: whitesmoke;";>COMPANY RECORD</h1>

<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM company" )
		or die("Can not execute query");

	echo "<table class='ui striped unstackable collapsing table'> \n";
	echo "<thead> <tr> <th>Company ID</th> <th>NAME</th> <th>DELETE</th> <th>UPDATE</th> </tr> </thead> <tbody>\n";


	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $com_id </td>";
		echo "<td> $name </td>";
		echo "<td> <a href = 'delete.php?id=$com_id'> Delete </a> </td>";
		echo "<td> <a href = 'update_input.php?id=$com_id&name=$name'> Update </a> </td>";

		echo "</tr> \n";
	}

	echo "</table> \n";

	echo "<br><p><a href=create_input.php><button class='ui blue button'>ADD NEW VALUES</button></a></p>";
	?>

</body>
</html>