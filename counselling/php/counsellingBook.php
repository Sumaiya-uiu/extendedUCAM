<?php 
	require_once ('../db/dbh.php');
  $teacherID = $_GET['id']; 
  $query1 = "SELECT * FROM teacher_profile WHERE teacher_id = $teacherID;";
  $execute1 = mysqli_query($conn, $query1);
  $result = mysqli_fetch_assoc($execute1);
  
  $teacher_name = $result['teacher_name']; 
  $teacher_email = $result['teacher_email']; 
  $teacher_title = $result['teacher_title'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <!-- JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
    <style>
      table,
      th,
      td {
        text-align: center;
      }
      #btn{
        text-decoration: none;
        color: white;
      }
    </style>
</head>
<body>
    <!-- <div class="choose-option1">
        <label for="cars">Choose a Date:</label>
        <input class="input-field" type="date" name="date" class="input-field">
    </div> -->
          
          <section>
            <table class="table">
              <tr>
                <td colspan="6"><?php echo $teacher_name; ?> Counselling Hour</td>
              </tr>
              <tr class="table-dark">
                <th scope="col">#</th>
                <th scope="col">Day</th>
                <th scope="col">Stat Time</th>
                <th scope="col">End Time</th>
                <th scope="col">Room No.</th>
                <th scope="col">Book Your Time</th>
              </tr>
              <?php
              $query = "SELECT * FROM teacherinformation WHERE teacher_id = $teacherID;";
              $execute = mysqli_query($conn, $query);
              if($execute->num_rows>0){
                while($rd = mysqli_fetch_assoc($execute)){
                  $id = $rd['id'];
                  $counselingDay = $rd['counselingDay'];
                  $startTime = $rd['startTime'];
                  $endTime = $rd['endTime'];
                  $room_number = $rd['room_Number'];
          ?>
              <tbody class="table-success table-striped">
                <tr>
                  <th scope="row"><?php echo $id; ?></th>
                  <td><?php echo $counselingDay; ?></td>
                  <td><?php echo $startTime; ?></td>
                  <td><?php echo $endTime; ?></td>
                  <td><?php echo $room_number; ?></td>
                  <td>
                    <button type="button" class="btn btn-secondary btn-sm">
                      <a href="bookingProcess.php" id="btn">Book Now</a>
                    </button>
                  </td>
                </tr>
                <?php
                      }
                    }else{
                ?>
                <tr>
                  <th scope="row" colspan="6">No time available</th>
                </tr>
                <?php
                    }
                ?>
              </tbody>
            </table>
          </section>     
  </body>
</html>