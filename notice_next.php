<?php
require_once('database.php');
error_reporting(0);
$var1=$_POST['num'];
$var2=$_POST['num2'];
$var3=$_POST['num3'];
$notice_date = date('Y-m-d');

if($var1==""|$var2==""|$var3==""){
	echo '<i style="color:#CC0000; font-size:12px">Please Insert Your Message</i>';	
	exit;
} else {
	 mysql_query("INSERT INTO notice( `teacher_name`, `notice_heading`, `notice_body`, `notice_date`) VALUES('$var1','$var2','$var3','$notice_date')")or die('Something is wrong we are trying to fix it soon'.mysql_error());
	 echo '<i style="color:#0F6; font-size:12px">Noticed uploaded Successfully</i>';
	
}
?>
