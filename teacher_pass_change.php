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

  <!--[if IE 6]><link rel="stylesheet" type="text/css" href="javascript/lightbox/themes/default/jquery.lightbox.ie6.css" /><![endif]-->
    <script type="text/javascript" src="javascript/jquery.min.js"></script>

</head>

<body>
<div class="container" style="width:785px; height:270px;"><!--main container starat-->


<!--start header part -->

    
<!--end header part -->



<!--start middle part -->

   <div class="middle">
     <div class="rightclm">
          <div class="acco" style="margin-left:-20px;">
           <div class="filez" style="background-color:#FCFCFC; padding:10px; font-family:Tahoma, Geneva, sans-serif; font-size:12px;">
            <p style="font-size:14px; font-weight:bold;"><img src="icon/unlock.ico" style="padding-right:5px;" />Password Change</p>
         <table width="600" border="0">
  <tr>
    <td width="192" height="26">Old Password</td>
    <td width="8">:</td>
    <td width="378"><input type="password" name="old" id="old" required="required" style="width:300px; height:15px;" /> <input type="hidden" id="teacher_id" value="<?php echo $row['teacher_id']; ?>" /></td>
  </tr>
  <tr>
    <td height="30">New Password</td>
    <td>:</td>
    <td><input type="password" required="required" id="new" style="width:300px; height:15px;" /></td>
  </tr>
  <tr>
    <td height="28">Retype New Password</td>
    <td>:</td>
    <td><input type="password" id="retype" required="required" name="retype"  style="width:300px; height:15px;"/></td>
  </tr>
  <tr>
    <td height="44">&nbsp;</td>
    <td>&nbsp;</td>
    <td>
    <div id="error" style="border:1px soled
 #FF6; background-color:#FFFFFF; font-size:11px; padding:10px; color:#FF0000">
    </div>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
    <a href="#" id="pro" style="text-decoration:none; font-size:12px; color:#FFF; background-color:#000; padding:5px;">Submit</a>
    </td>
    
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script>

 $("#pro").click(function () {
  
  var num =$('#old').val();
  var num2 =$('#new').val();
  var num3=$('#retype').val();
  var num4=$('#teacher_id').val();
  
  $.post('teacher_pass.php',{num:num, num2:num2, num3:num3, num4:num4},function(check){
                    $('#error').html(check);
					
              
				
						});
								});
</script>
  </tr>
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
