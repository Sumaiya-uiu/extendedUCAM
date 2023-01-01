<?php
    require_once ('../db/dbh.php');
    $counselling_id = $_GET['counselling_id'];
    $teacher_id = $_GET['teacher_id'];

    $teacher_query = "SELECT * FROM teacher_profile WHERE teacher_id = $teacher_id;";
    $teacher_execute = mysqli_query($conn, $teacher_query);
    $teacher_result = mysqli_fetch_assoc($teacher_execute);
    $teacher_name = $teacher_result['teacher_name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extended ELMS</title>
    <link rel="stylesheet" href="../css/style-booking1.css">
    <link
      href="http://fonts.googleapis.com/css?family=Playfair+Display:900"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="http://fonts.googleapis.com/css?family=Alice:400,700"
      rel="stylesheet"
      type="text/css"
    />

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" />
</head>
<body class="container">
    <header>
      <nav>
        <!-- This is navbar section -->
      </nav>
    </header>
    <main>
      <div id="booking" class="section">
        <div class="section-center">
          <div class="container">
            <div class="row">
              <div class="booking-form">
                <div class="booking-bg">
                  <div class="form-header">
                    <h2>Book Your Counselling Hour</h2>
                    <p>
                      <?php echo $teacher_name; ?> Sir Counselling time is
                      <?php
                        $query = "SELECT * FROM teacherinformation WHERE id = $counselling_id;";
                        $execute = mysqli_query($conn, $query);
                        $rd = mysqli_fetch_assoc($execute);
                        $counselingDay = $rd['counselingDay'];
                        $counselling_date = $rd['counselling_date'];
                        $startTime = $rd['startTime'];
                        $endTime = $rd['endTime'];
                        $arr1 = explode(":",$startTime);
                        $arr2 = explode(":",$endTime);
                        echo "<span>". $startTime . " to " . $endTime . "</span>";
                      ?>
                    </p>
                  </div>
                </div>
                <form class="counselling-form" action="./bookingAvailability.php?counselling_id=<?php echo $counselling_id;?>&teacher_id=<?php echo $teacher_id;?>"" method="POST">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <span class="form-label">Start Time</span>
                        <select class="form-control" name="startTime" required>
                          <option value="" selected hidden>
                            Select your start time
                          </option>
                          <?php
                            $startTimeHour1 = number_format($arr1[0]);
                            $startTimeMinute1 = number_format($arr1[1]) + ($startTimeHour1 * 60) + 30;
                            $startTimeHour1 = intval($startTimeMinute1 / 60);
                            $startTimeMinute1 = $startTimeMinute1 % 60;
                            if($startTimeHour1 < 10){
                              $hour1 = '0'.strval($startTimeHour1);
                            }else{
                              $hour1 = strval($startTimeHour1);
                            }
                            if($startTimeMinute1 < 10){
                              $min1 = '0'.strval($startTimeMinute1);
                            }else{
                              $min1 = strval($startTimeMinute1);
                            }

                            $startTimeMinute2 = $startTimeMinute1 + ($startTimeHour1 * 60) + 30;
                            $startTimeHour2 = intval($startTimeMinute2 / 60);
                            $startTimeMinute2 = $startTimeMinute2 % 60;
                            if($startTimeHour2 < 10){
                              $hour2 = '0'.strval($startTimeHour2);
                            }else{
                              $hour2 = strval($startTimeHour2);
                            }
                            if($startTimeMinute2 < 10){
                              $min2 = '0'.strval($startTimeMinute2);
                            }else{
                              $min2 = strval($startTimeMinute2);
                            }

                            $startTimeMinute3 = $startTimeMinute2 + ($startTimeHour2 * 60) + 30;
                            $startTimeHour3 = intval($startTimeMinute3 / 60);
                            $startTimeMinute3 = $startTimeMinute3 % 60;
                            if($startTimeHour3 < 10){
                              $hour3 = '0'.strval($startTimeHour3);
                            }else{
                              $hour3 = strval($startTimeHour3);
                            }
                            if($startTimeMinute3 < 10){
                              $min3 = '0'.strval($startTimeMinute3);
                            }else{
                              $min3 = strval($startTimeMinute3);
                            }

                          ?>
                          <option value="<?php echo $startTime; ?>"><?php echo $startTime; ?></option>
                          <option value="<?php echo $hour1.':'.$min1; ?>"><?php echo $hour1.':'.$min1; ?></option>
                          <option value="<?php echo $hour2.':'.$min2; ?>"><?php echo $hour2.':'.$min2; ?></option>
                          <option value="<?php echo $hour3.':'.$min3; ?>"><?php echo $hour3.':'.$min3; ?></option>
                        </select>
                        <span class="select-arrow"></span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <span class="form-label">End Time</span>
                        <select class="form-control" name="endTime" required>
                          <option value="" selected hidden>
                            Select your end time
                          </option>
                          <option value="<?php echo $hour1.':'.$min1; ?>"><?php echo $hour1.':'.$min1; ?></option>
                          <option value="<?php echo $hour2.':'.$min2; ?>"><?php echo $hour2.':'.$min2; ?></option>
                          <option value="<?php echo $hour3.':'.$min3; ?>"><?php echo $hour3.':'.$min3; ?></option>
                          <option value="<?php echo $endTime; ?>"><?php echo $endTime; ?></option>
                        </select>
                        <span class="select-arrow"></span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <span class="form-label">Selected Day</span>
                        <input
                          class="form-control"
                          type="text"
                          value="<?php echo $counselingDay; ?>"
                          name="day"
                          readonly
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <span class="form-label">Selected Date</span>
                        <input
                          class="form-control"
                          type="text"
                          value="<?php echo $counselling_date; ?>"
                          name="date"
                          readonly
                        />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <span class="form-label">Choose Course</span>
                      <select class="form-control" name="course" required>
                        <option value="" selected hidden>
                          Select your course
                        </option>
                        <?php
                            $query1 = "SELECT * FROM teacher_courses WHERE teacher_id=$teacher_id;";
                            $execute1 = mysqli_query($conn, $query1);
                            if($execute1->num_rows>0){ 
                              while($rd1 = mysqli_fetch_assoc($execute1)){ 
                              $course_name = $rd1['course_name'];
                        ?>
                        <option value="<?php echo $course_name;?>"><?php echo $course_name;?></option>
                        <?php
                              }
                            }
                        ?>
                      </select>
                      <span class="select-arrow"></span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <span class="form-label">Choose Section</span>
                      <select class="form-control" name="section" required>
                        <option value="" selected hidden>
                          Select your section
                        </option>
                        <?php
                            $query1 = "SELECT * FROM teacher_courses WHERE teacher_id=$teacher_id;";
                            $execute1 = mysqli_query($conn, $query1);
                            if($execute1->num_rows>0){ 
                              while($rd1 = mysqli_fetch_assoc($execute1)){ 
                              $section = $rd1['section'];
                        ?>
                        <option value="<?php echo $section;?>"><?php echo $section;?></option>
                        <?php
                              }
                            }
                        ?>
                      </select>
                      <span class="select-arrow"></span>
                    </div>
                  </div>
                  <div class="form-btn">
                    <input type="submit" class="submit-btn text-center" value="Check Availability"/>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer>
      <!-- This is footer section -->
    </footer>
  </body>
</html>