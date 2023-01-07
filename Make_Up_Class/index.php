<?php 
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>




<div style="width:400px; margin-left:35%; margin-top:10%;" class="card text-center">
  <div class="card-header">
    Make-up Schedule
  </div>
  <div class="card-body">
  <form action="activity_func.php" method="post" >
  <div class="mb-3">
  <label for="cars">Choose a course</label>

    <select name="course_code">
      <option value="ACT 2111">ACT 2111</option>
      <option value="BIO 3105">BIO 3105</option>
      <option value="BAN 2501">BAN 2501</option>
      <option value="CSE 1111">CSE 1111</option>
      <option value="CSE 2215">CSE 2215</option>
      <option value="CSE 2233" selected>CSE 2233</option>
    </select>
  </div>

  <div class="mb-3">
  <label for="cars">Choose a day</label>
    <select name="day_name">
      <option value="sat" selected>sat</option>
      <option value="sun">sun</option>
      <option value="tue">tue</option>
      <option value="wed">wed</option>
    </select>
  </div>



  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Starting Time</label>
    <input type="text" class="form-control" name="starting_time">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Ending Time</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" name="ending_time">
  </div>
  <button type="submit" class="btn btn-primary" name="search">Search</button>
</form>
   
  </div>
</div>
  





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


  </body>
</body>
</html>