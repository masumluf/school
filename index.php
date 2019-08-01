<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Secure Zone</title>
<link rel="stylesheet" href="css/secure.css" />

<script src="js/jquery.js"></script>
</head>

<body>
<div class="main_container">

  <div class="container">
   
       <ul>
     <li style="width:1000px;"> <b>Welcome to BusyBees International School</b> <br />
     <h3 style="font-family:Arial, Helvetica, sans-serif; font-weight:100; ">This area only for Administrator not for viwers
     If you are a visitors and want to know about Summerfield International School<br /> then please follow this link <a href="http://busy-bees.org/" style="text-decoration:none; color:#7E73E6">www.busy-bees.org</a>
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
    <td width="285"><b>Username</b></td>
    <td colspan="2" rowspan="6">&nbsp;</td>
    </tr>
  <tr>
    <td><label for="username"></label>
      <input type="text" name="username" id="username" placeholder="Username" required="required"
      /></td>
  </tr>
  <tr>
    <td><br /><b>Password</b></td>
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
    <div style="text-align:center; margin-top:5px;">
         All right reserved @<a href="http://www.vin-rack.com/" target="_new" style="text-decoration:none; color:#000">Vinrack Communication Ltd</a>
      </div>
<hr />
</div>

<script>

 $("#subm").click(function () {
  
  var num =$('#username').val();
  var num2 =$('#password').val();
  
  $.post('log.php',{num:num, num2:num2},function(check){
	   
				 if (check == 'email_error'){
					 $('#result').text("Loading...");
                    $('#result').text("wrong username and password");
                }if (check == 'success'){
                    window.location.href = "http://admin.php";
                }
				
						});
								});
</script>
</body>
</html>