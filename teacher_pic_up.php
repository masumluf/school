<?php
require_once('database.php');

error_reporting(0);
sleep(4);
$email=$_POST['mail'];
$colm=$_POST['pic_name'];
$class=$_POST['selection'];

	$result = mysql_query("SELECT *FROM teacher_info WHERE teacher_id='$colm';");  
while($row=mysql_fetch_array($result))
	
	{
		$vari=$row['pic'];
		if($vari!=="unti.jpg"){
		$vari="teacher_pic/".$row['pic'];
		}
	}

if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
$path = "teacher_pic/"; //set your folder path
$filename = $_FILES['photoimg']['tmp_name']; //get the temporary uploaded image name
$valid_formats = array("jpg", "png", "gif", "bmp", "jpeg","GIF","JPG","PNG"); //add the formats you want to upload
	
		$name = $_FILES['photoimg']['name']; //get the name of the image
		$size = $_FILES['photoimg']['size']; //get the size of the image
		if(strlen($name)) //check if the file is selected or cancelled after pressing the browse button. 
		{
			list($txt, $ext) = explode(".", $name); //extract the name and extension of the image
			if(in_array($ext,$valid_formats)) //if the file is valid go on.
			{
			if($size < 102098888) // check if the file size is more than 2 mb
			{
			$actual_image_name =  str_replace(" ", "_", $txt)."_".time().".".$ext; //actual image name going to store in your folder
			$tmp = $_FILES['photoimg']['tmp_name']; 
			if(move_uploaded_file($tmp, $path.$actual_image_name)) //check the path if it is fine
				{
					move_uploaded_file($tmp, $path.$actual_image_name); //move the file to the folder
					//display the image after successfully upload
					//echo "<img src='uploads/".$actual_image_name."'  class='preview'> <input type='hidden' name='actual_image_name' id='actual_image_name' value='$actual_image_name' />";
					//echo "Successfully uploaded ..";
					
					
					mysql_query("Update teacher_info SET pic='$actual_image_name' Where teacher_id=$colm")or die("Fail to insert".mysql_error());
					echo "&nbsp;&nbsp;Picture successfully Updated" ;
					unlink($vari);
				}
			else
				{
				echo "failed";
				}
			}
			else
			{
				echo "Image file size max 2 MB";					
			}
			}
			else
			{
				echo "Invalid file format..";	
			}
		}
		else
		{		
			echo "Please select image..!".$colm;
		}		
	exit;
	}
?>
