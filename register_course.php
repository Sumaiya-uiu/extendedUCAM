<?php
    require_once('authenticate.php');
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Select Course</title>

        <style>
            body {
                text-align: center;
            }
            form {
                padding-top: 100px
            }
        </style>
    </head>

    <body style="background-color:MistyRose;">

    <form method=get action=register_course_section.php>
        <h3>Select course you want to register</h3>
        

        <label for="Options">Course Code :</label>
      </br>
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

        <input type="submit" name="submit" value="Select" />

    </form>
    </body>
</html>
