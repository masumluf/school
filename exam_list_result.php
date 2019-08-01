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
<link rel="stylesheet" href="css/student.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>

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

   <div class="middle">
      <div class="leftclm">
         
            <ul>
               <li><a href="student.php">HOME</a></li>
                 <li><a href="download.php">DOWNLOAD</a></li>
                   <li><a href="account.php">ACCOUNT</a></li>
                     <li><a href="stu_notice.php">NOTICE</a></li>
                     <li><a href="exam_list_result.php">RESULT</a></li>
                
                 <li><a href="stu_setting.php">SETTING</a></li>
                 <li><a href="student.php?logout">LOG OUT</a></li>
            </ul>
         
      </div>
      <div class="rightclm">
           <div class="acco">
             <!-- DC Horizontal Tabs End -->
             
                <div class="filez" style="background-color:#FCFCFC; padding:10px; font-family:Tahoma, Geneva, sans-serif; font-size:12px; margin-left:-25px;">
            <p style="font-size:14px; font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;<b>&#8801;</b>&nbsp;&nbsp;Select Your Task</p>
            <ul>
               <li style="list-style:url(icon/image_new.gif)"><a href="stu_exam_result.php">Class Test Result</a></li>
               <li style="list-style:url(icon/notes.ico)"> <a href="">Semester Result</a></li>
               
             
            </ul>
           </div>
<div class="tsc_clear"></div>
        </div>
      </div>
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