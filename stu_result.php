<?php
// echo "please write something ..";

?>
<style>
.student_warper
{
	width:580px;
	height:50px;
	color:#000;
	padding:5px;
	background-color:#FBFBFB;
	border:1px solid #EBEBEB;
	text-align:right;
	margin-bottom:10px; margin-top:5px; margin-bottom:2px;
	font-family:Tahoma, Geneva, sans-serif;
	font-size:12px; color:#036;
	
}
.student_warper img { width:50px; height:40px; float:left; padding:5px;}

.student_warper:hover { background-color:#EAEAEA; border:2px solid #D3D3D3}
</style>
<?php
include('db.php');

$var=$_POST['num'];
$i=0;

//echo $var;

$result = mysql_query("SELECT * FROM student_bio WHERE reg_id='$var'");  
while($row=mysql_fetch_array($result))
	
	{
	 
	 echo  '<div class="student_warper">';
   echo '<img src="student_pic/13668671767181.jpg" width="1536" height="2048" />'.$row['student_name']. '<br />';
   echo $row['reg_id'];
    echo '</div>';
	  $i++;
	  return true;
	}
	if($i==0)
	/*$iml='<img src="images/362.gif" width="50" height="50" />';
	echo $iml;
	echo "<br>";
	unset($iml);*/
	
	//echo $var;


?>
