<?php
include 'connection.php';

if(isset($_POST['search'])){
    $course_code=$_POST['course_code'];
    $day=$_POST['day_name'];
    $starting=$_POST['starting_time']; // 10.05
    $ending=$_POST['ending_time']; // 11.35


    $search_query="SELECT COUNT(*) as c_num
    from time_schedule
    where course_code='".$course_code."' ";

    $search_query=mysqli_query($conn,$search_query);
    if ($search_query->num_rows > 0){
        while($row = $search_query->fetch_assoc()){
            $total_student = $row['c_num'];
        }
    }



    $serial_num = 1;

    $data_fetch_query = "SELECT id, student_id,day,course_code,COUNT(*) as total
                         FROM time_schedule
                         WHERE student_id IN (
                                          SELECT student_id
                                          FROM time_schedule
                                          WHERE (starting_time >'".$starting."' OR 
                                            ending_time <'".$starting."')  AND 
                                            (starting_time >'".$ending."' 
                                           OR ending_time <'".$ending."') AND 
                                        course_code='".$course_code."'  AND student_id 
                                            NOT IN (
                                                    SELECT student_id
                                                    FROM time_schedule
                                                    WHERE (starting_time ='".$starting."' 
                                                    AND ending_time = '".$ending."')
                                                    )
                                                    GROUP BY student_id 
                                           ) AND day='".$day."'
                         
                         GROUP BY student_id ";    

    $data_fetch_query=mysqli_query($conn,$data_fetch_query);
    if ($data_fetch_query->num_rows > 0){
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

  <h5>Available Students</h5>
        <table class ="table">
                <tr>
                    <td style="padding:10px">Serial</td>
                    <td style="padding:10px">Student ID</td>
                </tr>
               
           <?php
        while($row = $data_fetch_query->fetch_assoc()){
          ?>
            <tr>
            <td style="padding:10px"><?= $serial_num ?></td>   
            <td style="padding:10px"><?= $row['student_id'] ?></td>
            </tr>
           <?php
           $serial_num++;
        }

           ?>
        </table>  
   
  </div>
  <div class="card-header">
    Course Code: <span style="font-weight:600"> <?=$course_code?></span>
  
  </div>
  <div class="card-header">
    Total Enrolled:<span style="font-weight:600"><?=$total_student?></span> 
  </div>
</div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        </body>
        </html>

       <?php

    }
}
?>