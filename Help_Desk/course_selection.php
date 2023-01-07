<!DOCTYPE html>
<html>
  <head>
   <title>Course Selection</title> 
  </head>
  <body> 
    <body style="background-color:MistyRose;"></body>
    </br>   
    </br>
    


    <h1>Course Selection</h1>
      </br>

<form method=get action=selected_course_by_student.php>
    <select type="text" value="Course Section" class="form-control" name ="course_code">
                <?php
                require_once('db_connect.php');
                $connect = mysqli_connect( HOST, USER, PASS, DB )
                        or die("Can not connect");
                
                
                $results = mysqli_query( $connect, "SELECT * FROM course_section" )
                    or die("Can not execute query");

                while( $rows = mysqli_fetch_array( $results ) ) {
                    extract( $rows );
                    echo "<option name='option'>".$course_code."</option>";
                }
                ?>
        </select>

        <select type="text" value="Course Section" class="form-control" name ="time">
                <?php
                require_once('db_connect.php');
                $connect = mysqli_connect( HOST, USER, PASS, DB )
                        or die("Can not connect");
                
                
                $results = mysqli_query( $connect, "SELECT * FROM course_section" )
                    or die("Can not execute query");

                while( $rows = mysqli_fetch_array( $results ) ) {
                    extract( $rows );
                    echo "<option name='option'>".$day1."</option>";

                }
                ?>
        </select>

    <input type="submit" name="submit" value="Done" />

</form>



  </body>
</html>