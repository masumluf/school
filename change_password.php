<?php
error_reporting(0);
session_start();
$check=$_SESSION['username'];



require_once('database.php');

$var=$_POST['num'];
$var2=$_POST['num2'];
$var3=$_POST['num3'];

$result = mysql_query("SELECT next_us2 FROM student_bio WHERE next_us2='$var';");  
$row=mysql_fetch_object($result);


if(mysql_affected_rows()>0){
	
	//echo "password matched";
	if($var2=="" && $var3==""){
		echo "&#215; Please type New Password";
		return false;
	}
	if($var2==$var3){
		 mysql_query("Update student_bio SET next_us2=$var2 Where reg_id=$check")or die("Fail to insert".mysql_error());
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

