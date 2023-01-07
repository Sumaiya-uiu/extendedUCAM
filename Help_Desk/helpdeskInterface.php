<?php 
  require_once('authenticate.php');
?>

<!DOCTYPE html>
<html>
  <head>
   <title>Helping Desk</title> 
   <style>
      body {
        text-align: center;
      }
   </style>
  </head>
  <body> 
    <body style="background-color:White;"></body>
    </br>   
    </br>
    
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
        }
    </style>
</head>

<body>
    <nav style="background-color: orange;width: auto;height: 80px;">
        <div style="color: white;text-align: center; font-size: 32px; font-weight: bold; padding-top: 20px;">Extended
            UCAM</div>

    </nav>

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