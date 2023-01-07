<?php
    require_once ('../db/dbh.php');
?>

<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      .cart-img{
        height: 450px;
      }
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
  </head>
  <body>
    <header>
      <nav>
        <!-- This is navbar section -->
      </nav>
    </header>
    <main>
      <section>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <?php
              $query = "SELECT * FROM teacher_profile;";
              $execute = mysqli_query($conn, $query);
              if($execute->num_rows>0){ 
                while($rd = mysqli_fetch_assoc($execute)){ 
                $teacher_id = $rd['teacher_id'];
                $teacher_name = $rd['teacher_name']; 
                $teacher_email = $rd['teacher_email']; 
                $teacher_title = $rd['teacher_title'];
                $teacher_img = $rd['teacher_img']; 
          ?>
          <div class="col" >
            <div class="card">
              <img
                src="../images/<?php echo $teacher_img; ?>"
                class="card-img-top cart-img"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title"><?php echo $teacher_name; ?></h5>
                <p class="card-text">
                  <!-- Hi I am -->
                  <!-- <?php echo $teacher_name; ?>. I studied in CSE from BUET. My -->
                  Email address: 
                  <?php echo $teacher_email; ?>
                  <br />
                  If you have any query then you can contact me in office hour
                  9am - 4pm.
                </p>
                <button
                  type="button"
                  class="btn btn-primary"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal<?php echo $teacher_id; ?>"
                >
                  See Details
                </button>
                <!-- Modal -->
                <div
                  class="modal fade"
                  id="exampleModal<?php echo $teacher_id; ?>"
                  tabindex="-1"
                  aria-labelledby="exampleModalLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="teacherModalLabel">
                          <?php echo $teacher_name; ?>
                        </h1>
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div id="teacher-details" class="modal-body">
                        <!-- Teacher Details Bosabi Ekhane -->
                        <section>
                          <table class="table">
                            <tr>
                              <td colspan="6" class=""><h5>Counselling Hour</h4></td>
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
                            $query2 = "SELECT * FROM teacherinformation WHERE teacher_id = $teacher_id;";
                            $execute2 = mysqli_query($conn, $query2);
                            if($execute2->num_rows>0){
                              while($rd2 = mysqli_fetch_assoc($execute2)){
                                $id = $rd2['id'];
                                $counselingDay = $rd2['counselingDay'];
                                $startTime = $rd2['startTime'];
                                $endTime = $rd2['endTime'];
                                $room_number = $rd2['room_Number'];
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
                                    <a href="bookingProcess.php?counselling_id=<?php echo $id;?>&teacher_id=<?php echo $teacher_id;?>" id="btn">Book Now</a>
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
                      </div>
                      <div class="modal-footer">
                          <input
                            type="submit"
                            class="btn btn-primary"
                            name="submit"
                            value="Cancel"
                          />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
                  }
              }else{}
          ?>
        </div>
      </section>
    </main>
    <footer></footer>
  </body>
</html>
