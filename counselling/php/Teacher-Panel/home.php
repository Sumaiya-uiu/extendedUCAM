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
            <h2 class="text-center mt-5 mb-5">Requested Students For Counselling</h2>
        </div>
      <div class="container">
        <table class="table table-striped table-dark text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Day</th>
                    <th scope="col">Start Time</th>
                    <th scope="col">End Time</th>
                    <th scope="col">Date</th>
                    <th scope="col">Completion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT * FROM counselling_booking WHERE teacher_id = $teacher_id ;";
                    $execute = mysqli_query($conn, $query);
                    if($execute->num_rows>0){ 
                        while($rd = mysqli_fetch_assoc($execute)){ 
                            $id = $rd['counselling_booking_id'];
                            // $student_name = $rd['student_name'];
                            $day = $rd['counsellingDay'];
                            $startTime = $rd['startTime'];
                            $endTime = $rd['endTime'];
                            $date = $rd['counsellingDate'];
                ?>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark Jukerburge</td>
                    <td><?php echo $day ?></td>
                    <td><?php echo $startTime ?></td>
                    <td><?php echo $endTime ?></td>
                    <td><?php echo $date ?></td>
                    <td>
                        <a href="./completion.php?id=<?php echo $id; ?>">
                            <button type="button" class="btn btn-primary">Complete</button>
                        </a>
                    </td>
                </tr>
                <?php
                        }
                    }
                ?>
            </tbody>
        </table>
      </div>
    </main>
    <footer>
      <!-- This is footer section -->
    </footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>