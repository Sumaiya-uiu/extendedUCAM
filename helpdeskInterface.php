<!DOCTYPE html>
<html>
  <head>
    <title>Helping Desk</title>
  </head>
  <body> 
    <body style="background-color:LightGray;"></body>
    </br>   
    </br>
    <button onclick="window.location.href='http://localhost/Software_project/provideInfo_input.php';">
      Provide Information
    </button>
    </br>   
    </br>
    Select course you need help
    </br>   
    

<label for="cars">options :</label>



  
<form method=get action=update_result.php>
    <select type="text" value="Select course" class="form-control" name ="Course_code">
                <?php
                require_once('db_connect.php');
                $connect = mysqli_connect( HOST, USER, PASS, DB )
                        or die("Can not connect");
                
                
                $results = mysqli_query( $connect, "SELECT * FROM course" )
                    or die("Can not execute query");

                while( $rows = mysqli_fetch_array( $results ) ) {
                    extract( $rows );
                    echo "<option name='month'>".$course_code."</option>";

                }
                ?>
        </select>

    <input type="submit" name="submit" value="Done" />

</form>



  </body>
</html>