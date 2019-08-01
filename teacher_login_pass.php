<?php
//include('db.php');
session_start();
error_reporting(E_ERROR | E_PARSE);

if(isset($_POST['num'])){
		$var=$_POST['num'];
	    $var2=$_POST['num2'];
	

	
mysql_connect("localhost","root","")or die("Fail to connect".mysql_error());
mysql_select_db("school")or die("Fail to connect".mysql_error());

$result=mysql_query("SELECT *FROM teacher_info where email='$var' && pass='$var2' ");
$row=mysql_fetch_object($result);

if(mysql_affected_rows()>0){

		  $_SESSION['user'] = $var;
		   echo $login_check = 'success'; 


//echo "<META http-equiv='refresh' content='1; URL=index.php?page=admin'>";

}else{

 echo $login_check = 'email_error';
}	

}


?>