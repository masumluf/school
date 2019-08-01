<?php 
require_once('database.php');
    $teacher_name=$_POST['pic_name'];
	 $class=$_POST['selection'];
    $exam_date = date('Y-m-d');
	$filez=$_FILES['photoimg']['tmp_name'];
	//echo $filez;
	$handle=fopen($filez,"r");
	while(($fileop=fgetcsv($handle,100,","))!==false){
		 if($class==""){
			 echo "Please Select Class Name";
			 exit;
		}
		 
		$stu_id=$fileop[0];
		$subject=$fileop[1];
		$marks=$fileop[2];
		
		 mysql_query("INSERT INTO class_test_result( `instructor`, `sub_name`, `marks`, `student_id`, `class_name`, `date`) VALUES('$teacher_name','$subject','$marks','$stu_id','$class','$exam_date')")or die('Something is wrong we are trying to fix it soon'.mysql_error());
	
	}
	 echo '<i style="color:#0F6; font-size:12px">Result uploaded Successfully</i>';
	
?>
