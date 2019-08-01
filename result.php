<?php
session_start();

$checking=$_SESSION['user'];
$val=$checking;
$security_pass=strlen($checking);
if($security_pass==0){
	header('Location: teacher_login.php');
}

?>

 
  <?php require_once('database.php'); 
	  
	  
	$result = mysql_query("SELECT *FROM teacher_info WHERE email='$checking';");  
while($row=mysql_fetch_array($result))
	
	{
	 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $row['teacher_name']; ?></title>
<link rel="stylesheet" href="css/teacher_profile.css" />
<link rel="stylesheet" href="css/tsc_accordion_toggle.css" />


  <link rel="stylesheet" type="text/css" href="javascript/lightbox/themes/default/jquery.lightbox.css" />
  <!--[if IE 6]><link rel="stylesheet" type="text/css" href="javascript/lightbox/themes/default/jquery.lightbox.ie6.css" /><![endif]-->
    <script type="text/javascript" src="javascript/jquery.min.js"></script>

  <script type="text/javascript" src="javascript/lightbox/jquery.lightbox.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(function(){
      jQuery('.lightbox').lightbox();
    });
  </script>
</head>

<body>
<div class="container"><!--main container starat-->


<!--start header part -->

    <div class="header">
       <div class="leftcolm">
           <img src="<?php echo "teacher_pic/".$row['pic']; ?>" >
            <div class="caption"><a href="teacher_pic_change.php">Edit Picture</a></div>
       </div>
       <script type="text/javascript">
	   $('.leftcolm').mouseenter(function() {
    $(this).find('.caption').fadeIn(500);
});

$('.leftcolm').mouseleave(function() {
    $(this).find('.caption').fadeOut(500);
});
	   </script>
       <div class="rightcolm">
             <ul>
               <li><strong>BUSY BEES INTERNATIONAL SCHOOL</strong></li>
               <li style="font-family:Arial, Helvetica, sans-serif; font-size:11px;">(Teachers Profile)</li>
                 <li style="margin-top:50px;"><b><?php echo $row['teacher_name']; ?></b></li>
             </ul>
       </div>
    </div>

<!--end header part -->


<div class="clear"></div>
<!--start middle part -->

   <div class="middle">
      <div class="leftclm">
         
            <ul>
               <li><a href="teacher.php">HOME</a></li>
                 <li><a href="file_share.php">FILE SHARING</a></li>
                   <li><a href="teacher.php">ARCHIVE</a></li>
                     <li><a href="mail.php">MAIL</a></li>
                     <li><a href="result.php">RESULT UPDATE</a></li>
                 
                 <li><a href="setting.php">SETTING</a></li>
                 <li><a href="teacher.php?logout">LOG OUT</a></li>
            </ul>
         
      </div>
      <div class="rightclm">
           <div class="acco" style="margin-left:-25px;">
           <div class="filez" style="background-color:#FCFCFC; padding:10px; font-family:Tahoma, Geneva, sans-serif; font-size:12px;">
            <p style="font-size:14px; font-weight:bold;"><img src="icon/page_up.ico" style="padding-right:10px;" />Result Uploading Area</p>
            <ul>
               <li style="list-style:url(icon/page_written.ico)"><a href="class_test.php">Class Test Result</a></li>
               <li style="list-style:url(icon/notes.ico)"><a href="teacher_pic_change.php">Semester Result</a></li>

            </ul>
           </div>
           </div>
      </div>
   </div>


<!--end middle part -->



<!--start footer part -->

  <div class="footer">
      <div style="text-align:center; margin-top:5px;">
         All right reserved @<a href="http://www.vin-rack.com/" target="_new">Vinrack Communication Ltd</a>
      </div>
  </div>

<!--end footer part -->







</div><!--main container end-->
</body>
</html>

<?php } ?>

<?php 
if(isset($_GET['logout'])){
	session_destroy();
	header('Location: teacher_login.php');
}

?>