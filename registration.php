<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Summerfield International School</title>

<link rel="stylesheet" href="css/toolkipt.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="js/newdate.js"></script>


<script>
$(function() {
$( "#datepicker" ).datepicker();
});
</script>

			<script type="text/javascript">
				$(window).load(function () {
					//alert("Loaded");
				});
			</script>
            
</head>

<body>
<div class="main-container"> <!---main div start--->

      <div class="header">
          <div class="header-right">
               <ul>
                <li>Welcome !</li>
                <li><a href="admin.php">HOME</a></li>
                
               </ul>
          </div>
       </div>
       
       




       
       <div class="new-student-enrolment">
         New Student Enrolment....
       </div>
       
       <div class="maint-form-div">
        
          <div class="border">
            <div class="header-border">
              Student Registration > Admissionn Form > 2012-2013
            </div>
              <div class="main-form">
            <form method="POST" action="next.php" enctype="multipart/form-data">
                  <ul>
                   <li> <b>Student Information</b></li>
                  
                   <li> <span class="req">*</span> <span class="den">Denoting Must Required Field, You couldn't Skip any</span></li>
                   
                   <li>
                   <label>Student's Name </label><span class="req">*</span> <br />
                   <input name="student_name" type="text" id="student_name"  placeholder="Student Name"  required="required" title="Please Type Student's Name"   />
                   </li>
                   <li>
                   <label>Father's Name </label> <span class="req">*</span> <br />
                   <input name="father_name" type="text"  id="father_name" placeholder="Student's Father Name"  required="required"/>
                   </li>
                   <li>
                   <label>Mother's Name </label> <span class="req">*</span><br />
                   <input name="mother_name" type="text"  id="mother_name" placeholder="Student's Mother Name" required="required" />
                   </li>
                   <li>
         <label>DATE OF BIRTH</label> <span class="req">*</span><br />
                   <input id="datepicker" class='datepicker' name="datepicker">
                          </li>
                   <li>
                    <label>AGE </label> <span class="req">*</span><br />
                   <input type="text" name="age" placeholder="Enter student's Age" id="age" required="required"  />
                   </li>
                   <li>
                   <label>Address </label> <span class="req">*</span><br />
                   <textarea name="address" required="required" style="width:400px;"></textarea>
                   </li>
                   <li>
                 <?php

			 $dbLink = mysql_connect('localhost', 'root', '');
				
$db_selected = mysql_select_db('school', $dbLink);
                       
            $sql = "SELECT class_name
FROM `class`";
            $result = mysql_query($sql, $dbLink) or die('cant query');
            $file = mysql_num_rows($result);
            ?>
				   
                   <label>Select Class </label> <span class="req">*</span><br />
                   <select name="selection" class="selected" id="selection" style="width:400px;">
                 
            <?php
                    while ($row = mysql_fetch_assoc($result)) {
								
						?>
                     <option><?php echo $row['class_name']; ?></option>
                   
                     <?php }?>
                   </select>
                   </li>
                    <li>
                  <?php

			 $dbLink = mysql_connect('localhost', 'root', '');
				
$db_selected = mysql_select_db('school', $dbLink);
//$last_inserted_row = mysql_insert_id($dblink)
                       
      $query = "SELECT  MAX(student_id) FROM student_bio"; 
	 
$result = mysql_query($query) or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($result)){
	$file=$row['MAX(student_id)'];
			}
			
			$var2=strlen($file);
			if($var2==5){
			  $date=date("Y");
			  $date4="0";
			  $date2=$date.$date4;
			  $var2=$date2.$file;
			   
			}
		    if($var2==4){
			  $date=date("Y");
			  $date4="00";
			  $date2=$date.$date4;
			  $var2=$date2.$file;
			   
			}if($var2==3){
			  $date=date("Y");
			   $date4="000";
			   $date2=$date.$date4;
			  $var2=$date2.$file;
			}if($var2==2){
			  $date=date("Y");
			   $date4="0000";
			   $date2=$date.$date4;
			  $var2=$date2.$file;
			}if($var2==1){
			  $date=date("Y");
			   $date4="00000";
			   $date2=$date.$date4;
			 $var2=$date2.$file;
			}
			//echo $var2;
			?>
  
                    
                    <label>STUDENT ID </label> <span class="req">*</span><br />
                   <input name="student_id" id="telephone" type="text"  required="required" value="<?php echo $var2; ?>"  />
                   
                   </li>
                   <li>
                    <label>Telephone Number </label> <span class="req">*</span><br />
                   <input name="telephone" id="telephone" type="text" placeholder="student address" required="required" />
                   
                   </li>
                   <li>
                   <label>Emergency Number </label> <span class="req">*</span><br />
                   <input name="emergency"  id="emer" type="text" placeholder="student address" required="required" />
                   
                   </li>
                   
                     <li>
                   <label>Gender: </label> <span class="req">*</span><br />
                   <select name="gender" size="1" id="gender" class="selected" style="width:400px;">
                     <option>Male</option>
                     <option>Female</option>
                     </select>
                   
                   </li>
                   
                   
                   <li>
                    <label>Upload Picture </label> <span class="req">*</span><br />
                    <input name="uploaded_file" type="file" id="pic" />
                   </li>
                   <li><div class="warning"><img src="images/light_bulb.ico" /> all filed is required</div>
                 
                   </li>
                   <li>
                    <input name="submit" type="submit" class="tsc_awb_large tsc_awb_white tsc_flat" value="Proceed" id="submit" />
                   </li> 
                   </form>                  
                  </ul>
              
              </div>
              
              
              
          </div>
       
       
       </div>




<script type="text/javascript">
			$("#submit").click(function () {
			if ($('#student_name').val().length == 0) {
     alert("Required Field..");
	 return false;
}
	if ($('#datepicker').val().length == 0) {
     alert("Required Field..");
	 return false;
}
	if ($('#age').val().length == 0) {
     alert("Required Field..");
	 return false;
}
	if ($('#father_name').val().length == 0) {
     alert("Required Field..");
	 return false;
}
	if ($('#selection').val().length == 0) {
     alert("Required Field..");
	 return false;
}
	if ($('#mother_name').val().length == 0) {
     alert("Required Field..");
	 return false;
}
	if ($('#emer').val().length == 0) {
     alert("Required Field..");
	 return false;
}
	if ($('#telephone').val().length == 0) {
     alert("Required Field..");
	 return false;
}
if ($('#gender').val().length == 0) {
     alert("Required Field..");
	 return false;
}
			});

			</script>
      


</div><!---main div start--->
</body>
</html>
