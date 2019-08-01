<?php
error_reporting(0);
require_once('database.php');

$var=$_POST['num'];

$result = mysql_query("SELECT email FROM teacher_info WHERE email='$var';");  
$row=mysql_fetch_object($result);

if(mysql_affected_rows()>0){
	 
	  echo "<b style='color:#CC0000; font-size:10px'> &#215; Email address is exist.Please try another email address. &#215;</b>";
		}else {
			 echo "<b style='color:green; font-size:10px'>&#10004;&#10004; Available email address </b>";
			return false;
}

?>