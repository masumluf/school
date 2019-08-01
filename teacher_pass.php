<?php
error_reporting(0);
session_start();
$check=$_SESSION['username'];



require_once('database.php');

$var=$_POST['num'];
$var2=$_POST['num2'];
$var3=$_POST['num3'];
$var4=$_POST['num4'];

if($var==""){
			echo "&#215; Please type Old Password";
		return false;
}

$result = mysql_query("SELECT pass FROM teacher_info WHERE pass='$var';");  
$row=mysql_fetch_object($result);

if(mysql_affected_rows()>0){
	
	//echo "password matched";
	if($var2=="" && $var3==""){
		echo "&#215; Please type New Password";
		return false;
	}
	if($var2==$var3){
		 mysql_query("Update teacher_info SET pass=$var2 Where teacher_id=$var4")or die("Fail to insert".mysql_error());
		  echo "<b style='color:green;'>&#10004;&#10004; Password Changed Successfully </b>";
		}else {
			echo " &#215; new password doesnt match. &#215;";
			return false;
		}
	
}else
{
	echo "&#215; pleaes type valid password";
	return false;
}
	 ?>

