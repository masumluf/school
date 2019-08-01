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
           <div class="acco">
            <dl class="tsc_tabs_type_2" style="width:90%;">
     
    <!-- Tab 1 Start -->
    <dt class="current">About</dt>
    <dd class="current">
      <h2>Teacher's Info<a href="edit.php" style="text-decoration:none; font-size:11px; margin-left:50px;"><img src="images/edit.png" /></a></h2>
      <p>
   
      <div class="show">
         <ul style="width:600px; list-style:none; margin-left:-40px;">
           <li style="padding:10px; border-bottom:1px dashed #000; border-left:3px solid #003; width:450px; background-color:#F9F9F9; margin-bottom:2px;"><b>Teacher Name:</b><strong style="float:right; color:#069"><?php echo $row['teacher_name']; ?></strong></li>
                      <li style="padding:10px; border-bottom:1px dashed #000; border-left:3px solid #003; width:450px;  background-color:#F9F9F9; margin-bottom:2px;"><b>Teacher Date Of Birth Name:</b><strong style="float:right; color:#069"><?php echo $row['dob']; ?></strong></li>
                      <li style="padding:10px; border-bottom:1px dashed #000; border-left:3px solid #003; width:450px;  background-color:#F9F9F9; margin-bottom:2px;"><b>Teacher Email:</b><strong style="float:right; color:#069"><?php echo $row['email']; ?></strong></li>
                      <li style="padding:10px; border-bottom:1px dashed #000; border-left:3px solid #003; width:450px;  background-color:#F9F9F9; margin-bottom:2px;"><b>Teacher Telephone:</b><strong style="float:right; color:#069"><?php echo $row['telephone']; ?></strong></li>
                      <li style="padding:10px; border-bottom:1px dashed #000; border-left:3px solid #003; width:450px;  background-color:#F9F9F9; margin-bottom:2px;"><b>Address:</b><strong style=" float:right; color:#069"><?php echo $row['address']; ?></strong></li>
         </ul>
        </div>
      </p>
      
    </dd>
    <!-- Tab 1 End -->
     
    <!-- Tab 2 Start -->
    <dt>Experience</dt>
    <dd>
      <h2>Teacher's Experience</h2>
      <p>  <div class="show">
         <ul style="width:600px; list-style:none; margin-left:-40px;">
           <li style="padding:10px; border-bottom:1px dashed #000; border-left:3px solid #003; width:450px; background-color:#F9F9F9; margin-bottom:2px;"><b>Teacher Experience:</b><strong style="float:right; color:#069"><?php echo $row['experi']; ?></strong></li>
                  
         </ul>
        </div></p>
   
   
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
<div class="tsc_clear"></div>
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