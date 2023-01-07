<?php
  $username ="root";
  $password ="";
  $servername="localhost";
  $dbname="extended_ucam";
  
  $conn = new mysqli($servername, $username, $password,$dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>