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

<div class="clear"></div>

<!--start middle part -->

   <div class="middle">
      <div class="leftclm">
         
            <ul>
              <li><a href="student.php">HOME</a></li>
                 <li><a href="download.php">DOWNLOAD</a></li>
                   <li><a href="account.php">ACCOUNT</a></li>
                     <li><a href="stu_notice.php">NOTICE</a></li>
                     <li><a href="query.php">QUERY</a></li>
                 <li><a href="stu_setting.php">SETTING</a></li>
                 <li><a href="student.php?logout">LOG OUT</a></li>
            </ul>
         
      </div>
      <div class="rightclm" style=" overflow:scroll;">
           <div class="acco">
           <h1 style="font-size:14px; color:#993300">Important Notice Panel</h1>
          
            <?php
			$i=0;
			$result = mysql_query("SELECT *FROM notice");  
while($row=mysql_fetch_array($result))
	
	{
	//extract($row);
	$i++;	
	 ?>
    
    
     <div class="down" style="padding:10px;
	height:70px;
	margin-bottom:5px;
	-webkit-box-shadow: 0px 0px 2px #000000;

-moz-box-shadow: 0px 0px 2px #000000;

box-shadow: 0px 0px 2px #000000;
background-color:#FCFCFC; margin-left:-20px; margin-right:10px; border-left:6px solid #e97027">
     <a href='view.php?notice_id=<?php echo $row['notice_id']; ?>&lightbox[width]=800&lightbox[height]=320' style="color:#000; font-size:11px;" class="lightbox"><?php echo $row['notice_heading']; ?></a>
     <p style="font-size:13px; color:#999999">
    <?php $body=substr($row['notice_body'],0,100); echo $body; ?>
     </p>
     <p style="color:#8D8D8D; font-size:9px; font-weight:bold;">Uploaded by:<?php echo $row['teacher_name']; ?> Uploaded Date:<?php echo $row['notice_date']; ?></p>
     </div>
     <?php } ?>
             <?php if($i==0)
	       echo "Nothing Uploaded Yet by Class Teacher";
		   exit;
	 
	  ?>
      
      </div>
   </div>


<!--end middle part -->



<!--start footer part -->

  <div class="footer">
      <a href="http://www.vin-rack.com/" style="text-decoration:none; color:#fff; font-size:11px; text-align:center">@ Vinrack Communication LTD</a>
  </div>

<!--end footer part -->




<?php } ?>
<?php 
if(isset($_GET['logout'])){
	session_destroy();
	header('Location: stu_login.php');
	
}

?>
</div>
</div><!--main container end-->
</body>
</html>

