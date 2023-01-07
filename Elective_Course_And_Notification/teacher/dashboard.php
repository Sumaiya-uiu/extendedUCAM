<?php
include('../lib/db_connect.php');
session_start();
    $con = mysqli_connect( HOST, USER, PASS, DB )
        or die("Can not connect");
$msg="";
if(!isset($_SESSION['loggedin'])){
	?>
	<script>
		window.location.href='../teacher_login_registration/indexTeacher.php';
	</script>
	<?php
}

// $uid=$_SESSION['UID'];
// $uid=$_SESSION['id'];
$uid=$_SESSION['teacher_id'];
// $id=$_SESSION['id'];
	
	
if(isset($_POST['submit'])){
	$to_id=mysqli_real_escape_string($con,$_POST['to_id']);
	$message=mysqli_real_escape_string($con,$_POST['message']);
	mysqli_query($con,"insert into messages(from_id,to_id,message) values('$uid','$to_id','$message')");
	$msg="Message send";
}

// $res_message=mysqli_query($con,"select teacher.name,messages.message from messages,teacher where messages.status=0 and messages.to_id='$uid' and teacher.id=messages.from_id");
// $res_message=mysqli_query($con,"select teacher.name,messages.message from messages,teacher where messages.status=0 ");
// messages.to_id='$uid' and
$res_message=mysqli_query($con,"select student1.name,messages.message from messages,student1 where messages.status=0 ");




$unread_count=mysqli_num_rows($res_message);

$sql_user="select id,name from student1 order by name asc";
$res_user=mysqli_query($con,$sql_user);
?>
<!doctype html> 
<html>
   <head>
      <title>Student Query</title>
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="https://kit.fontawesome.com/5802563466.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <style>
         ul {
         display:block;
         background:#45619D;
         list-style:none;
         margin:0;
         padding:12px 10px;
         height:45px;
         }
         ul li {
         float:left;
         font:13px helvetica;
         margin:3px 0;
         }
         ul li a {
         color:#FFF;
         text-decoration:none;
         padding:6px 15px;
         cursor:pointer;
         }
         ul li a:hover {
         background:#425B90;
         text-decoration:none;
         cursor:pointer;
         }
         .text-info {
         color: #000 !important;
         }
         #post .container #post-row #post-column #post-box {
         margin-top: 120px;
         max-width: 600px;
         height: 360px;
         border: 1px solid #9C9C9C;
         background-color: #fff;
         }
         #post .container #post-row #post-column #post-box #post-form {
         padding: 20px;
         }
         #post .container #post-row #post-column #post-box #post-form #register-link {
         margin-top: -85px;
         }    
         .container h2{
         margin-bottom:25px;
         }
         #notification_box{
         margin-bottom:10px;
         }
         #notifications_container {
         position:relative;
         }
         #notifications_button {
         width:22px;
         height:22px;
         line-height:22px;
         border-radius:50%;
         -moz-border-radius:50%; 
         -webkit-border-radius:50%;
         margin:-3px 10px 0 10px;
         cursor:pointer;
         }
         #notifications_counter {
         display:block;
         position:absolute;
         background:#E1141E;
         color:#FFF;
         font-size:12px;
         font-weight:normal;
         padding:1px 3px;
         margin:-8px 0 0 25px;
         border-radius:2px;
         -moz-border-radius:2px; 
         -webkit-border-radius:2px;
         z-index:1;
         }
         #notifications {
         display:none;
         width:430px;
         position:absolute;
         top:30px;
         left:0;
         background:#FFF;
         border:solid 1px rgba(100, 100, 100, .20);
         -webkit-box-shadow:0 3px 8px rgba(0, 0, 0, .20);
         z-index: 0;
         }
         #notifications:before {         
         content: '';
         display:block;
         width:0;
         height:0;
         color:transparent;
         border:10px solid #CCC;
         border-color:transparent transparent #FFF;
         margin-top:-20px;
         margin-left:10px;
         }
         h3 {
         display:block;
         color:#333; 
         background:#FFF;
         font-weight:bold;
         font-size:13px;    
         padding:8px;
         margin:0;
         border-bottom:solid 1px rgba(100, 100, 100, .30);
         }
         #notifications_button .notifications_bell{
         background-image: url(https://static.xx.fbcdn.net/rsrc.php/v3/yz/r/yMI3kaj_lht.png);
         
         background-repeat: no-repeat;
         background-size: auto;
         background-position: 0 -712px;
         height: 24px;
         width: 24px;
         }
         #show_notification p{
         margin-left:10px;
		 margin-top:10px;
         }
      </style>
   </head>
   <body style="margin:0;padding:0;">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
      <div id="notification_box">
         <ul>
            <li id="notifications_container">
               <div id="notifications_counter"><?php echo $unread_count?></div>
               <div id="notifications_button">
               <i class="fa-light fa-bell"></i>
                  <!-- <div class="notifications_bell white"></div> -->
                  <!-- <div ><i class="fa-light fa-bell"></i></div> -->
               </div>
               <div id="notifications">
                  <h3>Notifications</h3>
                  <div style="height:300px;" id="show_notification">
					<?php if($unread_count>0){
						while($row_message=mysqli_fetch_assoc($res_message)){?>
                     <p><strong><?php echo $row_message['name']?></strong> message <?php echo $row_message['message']?></p>
					 <?php } } ?>
                  </div>
               </div>
            </li>
			<li id="notifications_container"><a href="teacherDashboard.php">Back to home</a></li>
         </ul>
      </div>
      <div id="post">
         <div class="container">
            <div id="post-row" class="row justify-content-center align-items-center">

               
               <div id="post-column" class="col-md-6">
                  <div id="post-box" class="col-md-12">
                     <form id="post-form" class="form" action="" method="post">
                        <h2 class="text-center text-info">Message Form</h2>
                        <div class="form-group">
                           <label for="user" class="text-info">User:</label><br>
                           <select class="form-control" name="to_id" required>
                              <option value="">Select User</option>
							  <?php while($row_user=mysqli_fetch_assoc($res_user)){?>
                              <option value="<?php echo $row_user['id']?>"><?php echo $row_user['name']?></option>
							  <?php } ?>
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="message" class="text-info">Message:</label><br>
                           <textarea class="form-control" name="message" required></textarea>
                        </div>
                        <div class="form-group">
                           <input type="submit" name="submit" class="btn btn-success" value="Submit">
						   <span style="color:red;"><?php echo $msg?></span>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
   <script>
      $(document).ready(function () {
          $('#notifications_button').click(function () {
              jQuery.ajax({
				url:'update_message_status.php',
				success:function(){
					$('#notifications').fadeToggle('fast', 'linear');
					$('#notifications_counter').fadeOut('slow');
				}
			  })
              return false;
          });
          $(document).click(function () {
              $('#notifications').hide(); 
          });
      });
   </script>
</html>