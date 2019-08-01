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
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/tsc_accordion_toggle.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>

<script type="text/javascript" src="js/jquery.form.js"></script>
<script type="text/javascript" >
 $(document).ready(function() { 
            $('#photoimg').change(function(){ 
				$("#preview").html('');
				$("#preview").html('<img src="loader.gif" height="20" alt="Uploading...."/>');
			$("#imageform").ajaxForm({
						target: '#preview'
		}).submit();
	});
}); 
</script>
</head>

<body>
<div class="container"><!--main container starat-->


<!--start header part -->

    <div class="header">
       <div class="leftcolm">
           <img src="<?php echo "teacher_pic/".$row['pic']; ?>" >
       </div>
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
   <div class="rightclm" style="height:250px;">
          <div class="acco" style="margin-left:-25px;">
           <div class="filez">
            <p><img src="icon/image_edit.ico" style="padding-right:10px;" />Please upload Your picture</p>
            <table width="600" border="0">
             <form id="imageform" method="post" enctype="multipart/form-data" action='teacher_pic_up.php'>
  <tr>
    <td width="195">Select Picture</td>
    <td width="14">&nbsp;</td>
    <td width="377">
      <span id="pimg">
        <input type="file" id="photoimg" name="photoimg" />
        <input type="hidden" name="pic_name" value="<?php echo $row['teacher_id']; ?>" />
        </span>
      </td>
  </tr>
  <tr>
    <td height="43"></td>
    <td>&nbsp;</td>
    <td>
    <div id='preview' align="center">
</div>
    </td>
  </tr>
  </form>
</table>


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