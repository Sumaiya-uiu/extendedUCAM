<?php
    require_once('../../db/dbh.php');
    $id = $_GET['id'];

    $query = "DELETE FROM counselling_booking WHERE counselling_booking_id=$id;";
    $execute = mysqli_query($conn, $query);
    header("location: home.php")
?>