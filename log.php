<?php
error_reporting(E_ERROR | E_PARSE);
if(isset($_POST['num'])){
	$var=$_POST['num'];
	$var2=$_POST['num2'];
	
	$var3="admin";
	$var4="pass";
	

	
	if($var==$var3 && $var2==$var4){
		//echo "success";
		//header("Location: http://localhost/school/"); /* Redirect browser */
		echo $login_check = 'success';
		
exit();
		} else {
			 echo $login_check = 'email_error';
			}
}

?>