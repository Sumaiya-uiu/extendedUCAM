<?php
    require_once ('../../db/dbh.php');
    $teacher_id = 101;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extended ELMS</title>
    <link rel="stylesheet" href="">
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
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="container">
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-primary text-white">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="">Teacher <small class="fs-6">Panel</small></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active text-white" aria-current="page" href="./home.php">Home</a>
              <a class="nav-link text-white" href="./schedule.php">Schedule</a>
              <a class="nav-link text-white" href="#">About Us</a> 
            </div>
          </div>
        </div>
      </nav>
    </header>
    <main>
        <div>
            <h2 class="text-center mt-5 mb-5">Teacher Schedule Maintain</h2>
        </div>
        <div class="mx-auto w-50">
            <form class="border border-primary rounded p-4" action="./scheduleProcess.php?teacher_id=<?php echo $teacher_id; ?>" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Start Time</label>
                    <input type="text" class="form-control" id="startTime" aria-describedby="emailHelp" name="startTime" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">End Time</label>
                    <input type="text" class="form-control" id="endTime" aria-describedby="emailHelp" name="endTime" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Select Date</label>
                    <input type="date" class="form-control" id="selectDate" aria-describedby="emailHelp" name="selectDate">
                </div>
                <input type="submit" class="btn btn-primary" value="Submit">
            </form>
        </div>
    </main>
    <footer>
      <!-- This is footer section -->
    </footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>