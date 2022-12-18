<?php 
  require_once('authenticate.php');
?>

<!DOCTYPE html>
<html>
  <head>
   <title>Helping Desk</title> 
  </head>
  <body> 
    <body style="background-color:MistyRose;"></body>
    </br>   
    </br>
    


    <h1>Help-Desk</h1>
      </br>
      <h3>Provide Helper's details</h3>
    <button onclick="window.location.href='http://localhost/Software_project/provideInfo_input.php';">
      Provide Information
    </button>
      </br>   
      </br>
      </br>
    <h3>Select course you need help</h3>
       

    <label for="Options">Course Code :</label>
      </br>
      



  
<form method=get action=read.php>
    <select type="text" value="Select course" class="form-control" name ="course_code">
                <?php
                require_once('db_connect.php');
                $connect = mysqli_connect( HOST, USER, PASS, DB )
                        or die("Can not connect");
                
                
                $results = mysqli_query( $connect, "SELECT * FROM course" )
                    or die("Can not execute query");

                while( $rows = mysqli_fetch_array( $results ) ) {
                    extract( $rows );
                    echo "<option name='option'>".$course_code."</option>";

                }
                ?>
        </select>

    <input type="submit" name="submit" value="Done" />

</form>



  </body>
</html>