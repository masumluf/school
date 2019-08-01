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
<link rel="stylesheet" href="css/reset.css" />
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

<div class="clear"></div>

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
            <dl class="tsc_tabs_type_2" style="width:90%;">
     
    <!-- Tab 1 Start -->
  
    <dt class="current">About</dt>
    <dd class="current">
      <h2 style="color:#993300">Welcome to Student Busy Bees student Area</h2>
      <p>
	 
	    <div class="show">
         <ul style="width:600px; list-style:none; margin-left:-40px;">
           <li style="padding:10px; border-bottom:1px dashed #000; border-left:3px solid #003; width:450px; background-color:#F9F9F9; margin-bottom:2px;"><b>Student Name:</b><strong style="float:right; color:#069"><?php echo $row['student_name']; ?></strong></li>
                      <li style="padding:10px; border-bottom:1px dashed #000; border-left:3px solid #003; width:450px;  background-color:#F9F9F9; margin-bottom:2px;"><b>Student Father Name:</b><strong style="float:right; color:#069"><?php echo $row['student_father_name']; ?></strong></li>
                      <li style="padding:10px; border-bottom:1px dashed #000; border-left:3px solid #003; width:450px;  background-color:#F9F9F9; margin-bottom:2px;"><b>Student Mother Name:</b><strong style="float:right; color:#069"><?php echo $row['student_mother_name']; ?></strong></li>
                      <li style="padding:10px; border-bottom:1px dashed #000; border-left:3px solid #003; width:450px;  background-color:#F9F9F9; margin-bottom:2px;"><b>Student Id:</b><strong style="float:right; color:#069"><?php echo $row['reg_id']; ?></strong></li>
                      <li style="padding:10px; border-bottom:1px dashed #000; border-left:3px solid #003; width:450px;  background-color:#F9F9F9; margin-bottom:2px;"><b>Class:</b><strong style=" float:right; color:#069"><?php echo $row['class_name']; ?></strong></li>
         </ul>
        </div>
        
	  
	  </p>
   
      
    </dd>
    <!-- Tab 1 End -->
     
    <!-- Tab 2 Start -->
    <dt>More +</dt>
    <dd>
      <h2>More Information About Student</h2>
      <p>
      <div class="show">
         <ul style="width:600px; list-style:none; margin-left:-40px;">
           <li style="padding:10px; border-bottom:1px dashed #000; border-left:3px solid #003; width:450px; background-color:#F9F9F9; margin-bottom:2px;"><b>Date Of Birth:</b><strong style="float:right; color:#069"><?php echo $row['dob']; ?></strong></li>
                      <li style="padding:10px; border-bottom:1px dashed #000; border-left:3px solid #003; width:450px;  background-color:#F9F9F9; margin-bottom:2px;"><b>Student Age:</b><strong style="float:right; color:#069"><?php echo $row['age']; ?></strong></li>
                      <li style="padding:10px; border-bottom:1px dashed #000; border-left:3px solid #003; width:450px;  background-color:#F9F9F9; margin-bottom:2px;"><b>Student Address:</b><strong style="float:right; color:#069"><?php echo $row['address']; ?></strong></li>
                      <li style="padding:10px; border-bottom:1px dashed #000; border-left:3px solid #003; width:450px;  background-color:#F9F9F9; margin-bottom:2px;"><b>Student Telephone:</b><strong style="float:right; color:#069"><?php echo $row['telephone']; ?></strong></li>
                      <li style="padding:10px; border-bottom:1px dashed #000; border-left:3px solid #003; width:450px;  background-color:#F9F9F9; margin-bottom:2px;"><b>Emergency Number:</b><strong style=" float:right; color:#069"><?php echo $row['emer']; ?></strong></li>
         </ul>
        </div>
      </p>
      
    </dd>
    <!-- Tab 2 End -->
     
    <!-- Tab 3 Start -->
    <dt>Achivement</dt>
    <dd>
      <h2>Nunc quis turpis quis libero</h2>
      <p>Aenean pellentesque auctor enim id ultricies. Cum sociis natoque penatibus el magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facukusus ubm egestas eet qyan. Nullam id dolor id nibh ultricies vehicula ut od elit. Donec ullamcorper nulla non metus auctor fringiall. Sed posuere consctetur est at labortis. Aenean lacinia bibendum nulla sed consectetur.</p>
      <p>Aenean pellentesque auctor enim id ultricies. Cum sociis natoque penatibus el magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facukusus ubm egestas eet qyan. Nullam id dolor id nibh ultricies vehicula ut od elit. Donec ullamcorper nulla non metus auctor fringiall. Sed posuere consctetur est at labortis. Aenean lacinia bibendum nulla sed consectetur.</p>
    </dd>
    <!-- Tab 3 End -->
     
    <!-- Tab 4 Start -->
    <dt>Qualification</dt>
    <dd>
      <h2>Nunc quis turpis quis libero 2</h2>
      <p>Aenean pellentesque auctor enim id ultricies. Cum sociis natoque penatibus el magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facukusus ubm egestas eet qyan. Nullam id dolor id nibh ultricies vehicula ut od elit. Donec ullamcorper nulla non metus auctor fringiall. Sed posuere consctetur est at labortis. Aenean lacinia bibendum nulla sed consectetur.</p>
      <div class="one_third">
        <p>Donec ullamcorper nulla non metus auctor firgilla. Cum sociis natoque penatibus et magnis dis parturient montees nascetur ridicuklus mus. Cras justo odio., dapibus ac faiclisis in egestas eget quam.</p>
      </div>
      <div class="one_third">
        <p>Conec ullamcorper nulla non metus auctor fringila. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur riduculus mus. Craas justo odion, dapibus ac facilisis in, egestas eget quam.</p>
      </div>
      <div class="one_third">
        <p>Aenean pellentesque auctor enim id ultricies. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur rididulus mus. Ctas justo odio, dapobus ac facilisis in, egestas eget quam.</p>
      </div>
    </dd>
    <!-- Tab 4 End -->
     
    <!-- Tab 5 Start -->
    <dt>Publication</dt>
    <dd>
      <h2>Nunc quis turpis quis libero</h2>
      <p>Aenean pellentesque auctor enim id ultricies. Cum sociis natoque penatibus el magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facukusus ubm egestas eet qyan. Nullam id dolor id nibh ultricies vehicula ut od elit. Donec ullamcorper nulla non metus auctor fringiall. Sed posuere consctetur est at labortis. Aenean lacinia bibendum nulla sed consectetur.</p>
      <p>Aenean pellentesque auctor enim id ultricies. Cum sociis natoque penatibus el magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facukusus ubm egestas eet qyan. Nullam id dolor id nibh ultricies vehicula ut od elit. Donec ullamcorper nulla non metus auctor fringiall. Sed posuere consctetur est at labortis. Aenean lacinia bibendum nulla sed consectetur.</p>
    </dd>
    <!-- Tab 5 End -->
     
  </dl>
<!-- DC Horizontal Tabs End -->

<script>$(".rightclm ul li:odd").css("background-color", "#bbbbbb");</script>
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