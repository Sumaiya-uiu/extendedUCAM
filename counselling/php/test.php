<?php
    require_once ('../db/dbh.php');
?>

<html>
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
  </head>
  <body>
    <header>
      <nav></nav>
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
                $teacher_name = $rd['teacher_name']; $teacher_email =
                $rd['teacher_email']; $teacher_title = $rd['teacher_title'];
                $teacher_img = $rd['teacher_img']; 
          ?>
          <div class="col">
            <div class="card">
              <img
                src="../images/<?php echo $teacher_img; ?>"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title"><?php echo $teacher_name; ?></h5>
                <p class="card-text">
                  Hi I am
                  <?php echo $teacher_name; ?>. I studied in CSE from BUET. My
                  email address is
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
                        
                      </div>
                      <div class="modal-footer">
                        <!-- <button
                  type="button"
                  class="btn btn-secondary"
                  data-bs-dismiss="modal"
                >
                  Close
                </button> -->
                        <form action="counsellingBook.php" method="POST">
                          <input
                            type="submit"
                            class="btn btn-primary"
                            name="submit"
                            value="Book Counselling"
                          />
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
                  }
              }else{
                              //echo "No Data to Show";
              }
          ?>
        </div>
      </section>
      <section></section>
    </main>
  </body>
</html>
