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

<script type="text/javascript" src="js/jquery.min.js"></script>

<script type="text/javascript" >
 $(document).ready(function() { 
          $("#proced").click(function () {
  
  var num =$('#teacher_id').val();
  var num2 =$('#heading').val();
   var num3 =$('#notice_body').val();

  $.post('notice_next.php',{num:num, num2:num2, num3:num3},function(data){
				$('#result').html(data);

						});
						});
}); 
</script>
</head>

<body>
<div class="container" style="width:785px; height:270px;"><!--main container starat-->


<!--start header part -->

    

<!--end header part -->



<!--start middle part -->

   <div class="middle">
     <div class="rightclm" style="height:270px;">
          <div class="acco" style="margin-left:-20px;">
           <div class="filez">
            <p><img src="icon/mail_add.ico" style="padding-right:10px;" />Please upload Your Notice</p>
            <table width="600" border="0">
             
  <tr>
    <td width="195">&nbsp;</td>
    <td width="14">&nbsp;</td>
    <td width="377"><input type="hidden" name="mail" value="<?php echo $row['teacher_name']; ?>" id="teacher_id" /></td>
  </tr>
  <tr>
    <td>Notice Heading</td>
    <td>&nbsp;</td>
    <td>
      <input type="text" name="heading" id="heading" style="width:300px;" />
    
    </td>
  </tr>
  <tr>
    <td>Notice Body</td>
    <td>&nbsp;</td>
    <td>
   <textarea name="notice_body" id="notice_body" style="width:300px;"></textarea>
    </td>
  </tr>
  <tr>
    <td height="43"></td>
    <td>&nbsp;</td>
    <td><a href="#" id="proced">Notice Upload</a></td>
  </tr>
  <tr>
    <td height="43"></td>
    <td>&nbsp;</td>
    <td>
    <div id='result' align="center">
</div>


    </td>
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

<?php 
if(isset($_GET['logout'])){
	session_destroy();
	header('Location: teacher_login.php');
}

?>