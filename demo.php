<?php
session_start();
$check=$_SESSION['username'];
if($check==0){
	header('Location: stu_login.php');
}
?>

  <?php require_once('database.php'); 
	  
	  
	$result = mysql_query("SELECT * FROM student_bio WHERE reg_id='$check';");  
while($row=mysql_fetch_array($result))
	
	{
	 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php  echo $row['student_name'];
	   ?></title>
<link rel="stylesheet" href="demo.css" />
<link rel="stylesheet" href="css/tsc_accordion_toggle.css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/tsc_accordion_toggle.js"></script>
</head>

<body>
<div class="container"><!--main container starat-->


<!--start header part -->

    <div class="header">
       <div class="leftcolm">
<img src="<?php echo "student_pic/".$row['pic']; ?>" >       </div>
       <div class="rightcolm">
             <ul>
               <li><strong>BUSY BEES INTERNATIONAL SCHOOL</strong></li>
               <li style="font-family:Arial, Helvetica, sans-serif; font-size:11px;">(Student Profile)</li>
                 <li style="margin-top:50px;"><b><?php  echo $row['student_name'];
	   ?></b></li>
             </ul>
       </div>
    </div>

<!--end header part -->



<!--start middle part -->

   <div style="text-align:left">
      asdfadfad
      
   </div>


<!--end middle part -->



<!--start footer part -->

  <div class="footer">
     <div style="text-align:center; margin-top:5px;">
      <a href="http://www.vin-rack.com/" style="text-decoration:none; color:#fff; font-size:11px; text-align:center">@ Vinrack Communication LTD</a>
      </div>
  </div>

<!--end footer part -->




<?php } ?>

</div><!--main container end-->
</body>
</html>


<?php 
if(isset($_GET['logout'])){
	session_destroy();
	header('Location: stu_login.php');
}

?>