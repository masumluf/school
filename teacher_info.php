<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Summerfield International School</title>

<link rel="stylesheet" href="css/toolkipt.css" />
<link rel="stylesheet" href="css/teacher.css" />
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>

<script src="js/newdate.js"></script>



<script>
$(function() {
$( "#datepicker" ).datepicker();
});
</script>

		<script>
$(document).ready(function(){
  $("#email").change(function(){
      var num =$('#email').val();
  $.post('check_email.php',{num:num,},function(data){
				$('#error').html(data);
				return false;

						});
  });
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
         Teachers Enrolment....
       </div>
       
       <div class="maint-form-div">
        
          <div class="border">
            <div class="header-border">
             Teachers BIO > About Teachers > 2012-2013
            </div>
              <div class="main-form">
            
                  <ul>
                   <li> <b>Teacher Information</b></li>
                  
                   <li> <span class="req">*</span> <span class="den">Denoting Must Required Field, You couldn't Skip any</span></li>
                   
                   <li>
                   <label>Teacher's Name </label><span class="req">*</span> <br />
                   <input name="teacher_name" type="text" id="Teacher_name"  placeholder="Teacher Name"  required="required" title="Please Type Student's Name"   />
                   </li>
                  
                 
                   <li>
         <label>DATE OF BIRTH</label> <span class="req">*</span><br />
                   <input id="datepicker" class='datepicker' name="datepicker">
                          </li>
                   <li>
                    <label>AGE </label> <span class="req">*</span><br />
                   <input type="text" name="age" placeholder="Enter Teacher's Age" id="age" required="required"  />
                   </li>
                     <li>
                   <label>Email </label> <span class="req">*</span><br />
                   <input name="email" type="email" id="email" placeholder="Teacher address" required="required" />
                   <div id="error">
                   </div>
                   </li>
                   <li>
                   <label>Address </label> <span class="req">*</span><br />
                   <input name="address" type="text" id="address" placeholder="Teacher address" required="required" />
                   </li>
                     <li>
                   <label>Experience </label> <span class="req">*</span><br />
                  <textarea name="experi" id="experi"></textarea>
                       
  
                   </li>
                   
                
                   <li>
                    <label>Telephone Number </label> <span class="req">*</span><br />
                   <input name="telephone" id="telephone" type="text" placeholder="Teacher address" required="required" />
                   
                   </li>
                   <li>
                   <label>Emergency Number </label> <span class="req">*</span><br />
                   <input name="emergency"  id="emer" type="text" placeholder="Teacher address" required="required" />
                   
                   </li>
                   <li>
                   <label>Starting Sallery </label> <span class="req">*</span><br />
                   <input name="st_sallery"  id="st_sallery" type="text" placeholder="Teacher address" required="required" />
                   
                   </li>
                   <li>
                   <label>Current Sallery </label> <span class="req">*</span><br />
                   <input name="cu_sallery"  id="cu_sallery" type="text" placeholder="Teacher address" required="required" />
                   
                   </li>
               
                   <li>
                   <div id="result">                   
                     </div>
                   </li>
                   <li>
                    <input name="submit" type="submit" class="tsc_awb_large tsc_awb_white tsc_flat"  id="submit" />
                   </li> 
                       
            <script type="text/javascript">

 $("#submit").click(function () {
  
  var num =$('#Teacher_name').val();
  var num2 =$('#datepicker').val();
   var num3 =$('#age').val();
  var num4 =$('#email').val();
   var num5 =$('#address').val();
  var num6 =$('#experi').val();
   var num7 =$('#telephone').val();
  var num8 =$('#emer').val();
  var num9=$('#st_sallery').val();
  var num11=$('#cu_sallery').val();
  $.post('teacher_log.php',{num:num,num2:num2,num3:num3,num4:num4,num5:num5,num6:num6,num7:num7,num8:num8,num9:num9,num11:num11},function(data){
				$('#result').html(data);

						});
						});
								
</script>
                                    
                  </ul>
              
              </div>
              
              
              
          </div>
       
       
       </div>





</div><!---main div start--->


</body>
</html>
