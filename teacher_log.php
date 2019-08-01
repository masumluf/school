
<?php
error_reporting(E_ERROR | E_PARSE);
require_once('database.php');
   
	$var=$_POST['num'];
	$var2=$_POST['num2'];
	$var3=$_POST['num3'];
	$var4=$_POST['num4'];
	$var5=$_POST['num5'];
	$var6=$_POST['num6'];
	$var7=$_POST['num7'];
	$var8=$_POST['num8'];
	$var9=$_POST['num9'];
	$var11=$_POST['num11'];
	$var10="unti.jpg";
	
	$var_rand=rand(5, 1005);
	$var_rand2=rand(5, 20005);
	$password=$var_rand + $var_rand2;
	
	//$var3="admin";
	//$var4="pass";

      
     if($var==""|$var2==""|$var3==""|$var4==""|$var5==""|$var6==""|$var7==""|$var8==""|$var9==""|$var11=="" ){
		 echo "<div id='result2'>missing field</div>";
		 
		 return false;		 
		}
		if(filter_var($var4,FILTER_VALIDATE_EMAIL)){
			//return true;
		}else{
			echo "<div id='result2'>Wrong Email address</div>";
			
			return false;
		} 
		 if($var4){
			 $result = mysql_query("SELECT email FROM teacher_info WHERE email='$var4';");  
$row=mysql_fetch_object($result);

if(mysql_affected_rows()>0){
	 
	  echo "<div id='result2'>Please Change Your Email address</div>";
	  exit();
		}
			 }
		echo "<div id='result3'>Successfully Uploaded..
		<br>Check your email you will get your username and password .
		</div>";
		
       mysql_query("INSERT INTO teacher_info( `teacher_name`, `dob`, `age`, `email`, `address`, `experi`, `telephone`, `emer`, `pic`,`pass`,`st_salary`,`cu_salary`) VALUES('$var','$var2','$var3','$var4','$var5','$var6','$var7','$var8','$var10','$password','$var9','$var11')")or die('<div id="result2">Oops something is worng you may left any required field</div>'.mysql_error());

?>