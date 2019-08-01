<?php
error_reporting(0);
require_once('database.php');
session_start();
$check=$_SESSION['username'];


  $i=0;
           $class_result = mysql_query("SELECT * FROM class_test_result WHERE `student_id`='$check' AND date between date_sub(now(),INTERVAL 7 DAY) and now()");  
while($result_row=mysql_fetch_array($class_result)){
	   $i++;
	   $vari=$result_row['marks'];
	   
	   if($vari>41){
		   $img='<img src="icon/Clear Green Button.png" />';
	   }else{
		   $img='<img src="icon/Cancel Red Button.png" />';
	   }
	  
	echo '<table width="720" border="0" class="result_out">
  <tr>
    <td width="120">'.$result_row['sub_name'].'</td>
    <td width="120">'.$result_row['marks'].'</td>
    <td width="120">Class Test</td>
    <td width="120">'.$result_row['date'].'</td>
    <td width="120">'.$result_row['instructor'].'</td>
    <td width="120">'.$img.'</td>
  </tr>
</table>';
}
 if($i==0){
	   	echo '<p class="result_out"><b>No Result Published Yet ..</b></p>';
	   }
?>