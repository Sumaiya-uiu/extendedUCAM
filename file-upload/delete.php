<?php
$name=$_GET['file']['name'];
$size=$_GET['file']['size'];
$type=$_GET['file']['type'];
$temp=$_GET['file']['tmp_name'];
$conn=new PDO('mysql:host=localhost; dbname=extended_ucam', 'root', '') or die(mysql_error());
if (isset($_GET['file_delete'])) {
    $sql = "DELETE * FROM file WHERE ? && ? LIMIT 1"; 
    $stmt = $conn->prepare($sql);            
    $stmt->bind_param("ii", $file_id, $user_id); 
    if($stmt->execute()){                    
      $sql="SELECT * FROM file WHERE file_id = '". $file_id ."' LIMIT 1";     
      $result=mysqli_query($sql);
      if($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
        unlink("folder/path/" . $row['file']);
        }
      }else{echo "Something went wrong!";}
}

?>