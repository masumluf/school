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
<link rel="stylesheet" href="css/query.css" />
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/newdate.js"></script>


<script>
$(function() {
$( "#datepicker" ).datepicker();
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
                     <li><a href="stu_result.php">RESULT</a></li>
                
                 <li><a href="stu_setting.php">SETTING</a></li>
                 <li><a href="student.php?logout">LOG OUT</a></li>
            </ul>
      
      </div>   
     
      <div class="rightclm" style="overflow:scroll">
           <div class="acco">
           <div class="result_heading">Class Test Result&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           
           <div>
          <b style="font-size:12px;"> Select Date:&nbsp;&nbsp;</b><input id="datepicker" class='datepicker' name="datepicker">
          <a href="#" id="check">Go.</a>&nbsp;&nbsp;&nbsp;
          <a href="stu_exam_result.php" >view all</a>&nbsp;&nbsp;&nbsp;<a href="#" id="recent">recent result</a>
          
           </div>
           </div>
           <table width="720" border="0" class="result_table">
  <tr>
    <td width="120">Subject Name</td>
    <td width="121">Earn Grade</td>
    <td width="120">Exam Type</td>
    <td width="120">Date</td>
    <td width="120">Course Teacher</td>
    <td width="120">Passing Type</td>
  </tr>
</table>

   <div id="class_test_result" class="class_show">
           <?php
		   error_reporting(0);
		   $i=0;
           $class_result = mysql_query("SELECT * FROM class_test_result WHERE `student_id`='$check';");  
while($result_row=mysql_fetch_array($class_result)){
	   $i++;
	   $vari=$result_row['marks'];
	  
	   if($vari>41){
		   $img='<img src="icon/Clear Green Button.png" />';
	   }else{
		   $img='<img src="icon/Cancel Red Button.png" />';
	   }
 echo '<table width="720" border="0" class="result_out">
  <tr>
    <td width="120">'.$result_row['sub_name'].'</td>
    <td width="120">'.$result_row['marks'].'</td>
    <td width="120">Class Test</td>
    <td width="120">'.$result_row['date'].'</td>
    <td width="120">'.$result_row['instructor'].'</td>
    <td width="120">'.$img.'</td>
  </tr>
</table>';
}
 if($i==0){
	   	echo '<p class="result_out"><b>No Result Published Yet ..</b></p>';
	   }
?>
</div>

<script>$(".acco p:odd").css("background-color", "#ffffc6" );</script>
<script>$(".acco .class_show tr:odd").css("background-color", "#ffffc6" );</script>
<script>$(".rightclm ul li:odd").css("background-color", "#bbbbbb");</script>


<script>

 $("#check").click(function () {
  
 var num =$('#datepicker').val();
  //var num2 =$('#password').val();
  
  $.post('view_result.php',{num:num},function(check){
	  $("#class_test_result").html(check);
	 
								});
			});
			
			 $("#recent").click(function () {
  
  $.post('recent_result.php',function(check){
	  $("#class_test_result").html(check);
	 
								});
			});
</script>


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