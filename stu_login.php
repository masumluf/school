<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Guardian Area..</title>
<link rel="stylesheet" href="css/secure.css" />
<script src="js/jquery.js"></script>
</head>

<body>
<div class="main_container">

  <div class="container">
   
       <ul>
     <li style="width:1000px;"> <b>Welcome to Summerfield International School</b> <br />
     <h3 style="font-family:Arial, Helvetica, sans-serif; font-weight:100; color:#090; ">This area only for Guardian Login<br /> 
      </h3>
     
     </li>
    
    </ul>
    
   
  </div>
  <div style="padding:10px;" class="mess">
    
    <div class="div-left">
        <ul>
        <li> <img src="images/first.png" /> Please Log In with your secure Username and Password.</li>
        <li> <img src="images/snd.png" /> Kept Your Log In Information safe</li>
        <li> <img src="images/link.png" width="47" height="49" /> Never shares your information with others</li>
         <li> <img src="images/target.png" width="32" height="32" /> Never Enters Invalid information</li>
      </ul>
    </div>
    <div class="div-right">
   
    <table width="397" border="0" align="center" style="margin-left:40px;">
  <tr>
    <td width="285"><b>Student's Username</b></td>
    <td colspan="2" rowspan="6">&nbsp;</td>
    </tr>
  <tr>
    <td><label for="username"></label>
      <input type="text" name="username" id="username" placeholder="Username" required="required"
      /></td>
  </tr>
  <tr>
    <td><br /><b>Student's Password</b></td>
  </tr>
  <tr>
    <td><label for="password"></label>
      <input type="password" name="password" id="password" placeholder="password" required="required" /></td>
    </tr>
  <tr>
    <td>
    <div id="result">
    </div>
    </td>
    </tr>
  <tr>
    <td>
    
    <input type="submit" id="subm" class="sub" style="width:90px; padding:3px; height:30px;"  value="Login"/>
    </td>
    </tr>
</table>

    </div>
 
    </div>
    
<hr />
</div>

<script>

 $("#subm").click(function () {
  
  var num =$('#username').val();
  var num2 =$('#password').val();
  
  $.post('student_login_pass.php',{num:num, num2:num2},function(check){
	   
				 if (check == 'email_error'){
					 $('#result').text("Loading...");
                    $('#result').text("wrong username and password");
                }if (check == 'success'){
                    window.location.href = "http://localhost/school/student.php";
                }
				
						});
								});
</script>
</body>
</html>